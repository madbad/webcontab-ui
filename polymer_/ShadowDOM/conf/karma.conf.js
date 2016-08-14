module.exports = function(karma) {
  karma.configure({
    // base path, that will be used to resolve files and exclude
    basePath: '../',

    // list of files / patterns to load in the browser
    files: [
      'tools/test/mocha-htmltest.js',
      'conf/mocha.conf.js',
      'node_modules/chai/chai.js',
      'shadowdom.js',
      'test/test.main.js',
      {pattern: 'src/**/*.js', included: false},
      {pattern: 'test/**/*.js', included: false},
      {pattern: 'test/**/*.html', included: false},
      {pattern: 'tools/**/*.js', included: false}
    ],

    // list of files to exclude
    exclude: [],

    frameworks: ['mocha'],

    // use dots reporter, as travis terminal does not support escaping sequences
    // possible values: 'dots', 'progress', 'junit', 'teamcity'
    // CLI --reporters progress
    reporters: ['progress'],

    // web server port
    // CLI --port 9876
    port: 9876,

    // cli runner port
    // CLI --runner-port 9100
    runnerPort: 9100,

    // enable / disable colors in the output (reporters and logs)
    // CLI --colors --no-colors
    colors: true,

    // level of logging
    // possible values: LOG_DISABLE || LOG_ERROR || LOG_WARN || LOG_INFO || LOG_DEBUG
    // CLI --log-level debug
    logLevel: LOG_INFO,

    // enable / disable watching file and executing tests whenever any file changes
    // CLI --auto-watch --no-auto-watch
    autoWatch: true,

    // Start these browsers, currently available:
    // - Chrome
    // - ChromeCanary
    // - Firefox
    // - Opera
    // - Safari (only Mac)
    // - PhantomJS
    // - IE (only Windows)
    // CLI --browsers Chrome,Firefox,Safari
    browsers: ['ChromeCanary'],

    // If browser does not capture in given timeout [ms], kill it
    // CLI --capture-timeout 5000
    captureTimeout: 50000,

    // Auto run tests on start (when browsers are captured) and exit
    // CLI --single-run --no-single-run
    singleRun: true,

    // report which specs are slower than 500ms
    // CLI --report-slower-than 500
    reportSlowerThan: 500,

    // compile coffee scripts
    preprocessors: {
    },

    plugins: [
      'karma-mocha',
      'karma-chrome-launcher',
      'karma-firefox-launcher',
      'karma-ie-launcher',
      'karma-script-launcher',
      'karma-crbot-reporter'
    ]
  });
};
