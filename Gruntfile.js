module.exports = function (grunt) {
	grunt.initConfig({
		concat: {
			dist: {
				src: [
					'content/themes/relicario/js/libs/*.js', // All JS in the libs folder
					'content/themes/relicario/js/theme/functions.js'  // This specific file
				],
				dest: 'content/themes/relicario/js/scripts.js',
			}
		},
		uglify: {
			build: {
				src: 'content/themes/relicario/js/scripts.js',
				dest: 'content/themes/relicario/js/scripts.min.js'
			}
		},
		autoprefixer: {
			options: {
				browsers: ['last 2 version', 'ie 9']
			},
			dist: {
				files: {
					'content/themes/relicario/style.css': 'content/themes/relicario/stylesheets/style.css'
				}
			}
		},
		sass: {
			dist: {
				files: {
					'content/themes/relicario/stylesheets/style.css': 'content/themes/relicario/stylesheets/relicario.scss'
				}
			} 
		},
		cssmin: {
			add_banner: {
				options: {
					banner: '/*\nTheme Name: Relicario Theme\nTheme URI: http://www.relicar.io\nDescription: Relicario - R Design by Thiago Duarte, based on Gridly theme.\nAuthor: Thiago Duarte\nAuthor URI: http://www.thiago.in/\nVersion: 0.1.0\nLicense: The MIT License (MIT)\nLicense URI: http://opensource.org/licenses/MIT\n*/'
				},
				files: {
				'content/themes/relicario/style.css': ['content/themes/relicario/style.css']
				}
			}
		},
		watch: {
			options: {
				livereload: true,
			},
			scripts: {
				files: ['content/themes/relicario/js/theme/*.js'],
				tasks: ['concat', 'uglify'],
				options: {
					spawn: false,
				},
			},
			css: {
				files: ['content/themes/relicario/stylesheets/*.scss'],
				tasks: ['sass', 'autoprefixer', 'cssmin'],
				options: {
					spawn: false,
				}
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default', ['concat', 'uglify', 'sass', 'autoprefixer', 'cssmin']);
};