module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        jshint: {
            options: {
                force: true
            },
            all: ['Gruntfile.js', 'assets/js/src/*.script.js']
        },

        uglify: {
            build: {
                files: {
                    'assets/js/min/script.js': [
                        'assets/lib/angular/angular.js',
                        'assets/lib/angular-route/angular-route.js',
                        'assets/lib/angular-animate/angular-animate.js',
                        'assets/js/src/controllers.js',
                        'assets/js/src/services.js',
                        'assets/js/src/directives.js',
                        'assets/js/src/routes.js'
                    ]
                }
            }
        },

        sass: {
            dist: {
                options: {
                    compass: true,
                    style: 'compressed'
                },
                files: {
                    'assets/css/style.css': 'assets/sass/style.scss'
                }
            }
        },

        autoprefixer: {
            options: {
                browsers: ['> 1%']
            },
            no_dest: {
                src: 'assets/css/style.css'
            }
        },

        watch: {
            options: {
                livereload: true
            },
            scripts: {
                files: ['assets/js/src/*.js'],
                tasks: ['uglify', 'jshint'],
                options: {
                    spawn: false,
                }
            },
            css: {
                files: ['assets/sass/*.scss', 'assets/css/style.css'],
                tasks: ['sass', 'autoprefixer'],
                options: {
                    spawn: false
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['jshint', 'uglify', 'sass', 'autoprefixer', 'watch']);

};
