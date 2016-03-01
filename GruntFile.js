module.exports = function(grunt) {
    require('jit-grunt')(grunt);

    grunt.initConfig({
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    "themes/creswick-garage/css/custom.css" : "themes/creswick-garage/less/custom.less" // destination file and source file
                }
            }
        },
        watch: {
            styles: {
                files: ['themes/creswick-garage/less/**/*.less'], // which files to watch
                tasks: ['less'],
                options: {
                    nospawn: true
                }
            }
        }
    });

    grunt.registerTask('default', ['less', 'watch']);
};