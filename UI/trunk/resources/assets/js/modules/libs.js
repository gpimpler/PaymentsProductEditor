var libsModule = {}

libsModule.agent = require('superagent')
libsModule._ = {}
libsModule._.find = require('lodash/find')

module.exports = libsModule
