var Sequelize = require('sequelize'); 
var creds = require('./../app/credentials');

var db = process.env.OPENSHIFT_APP_NAME || creds.db;
var user = process.env.OPENSHIFT_MYSQL_DB_USERNAME || creds.user;
var password = process.env.OPENSHIFT_MYSQL_DB_PASSWORD || creds.password;
var host = process.env.OPENSHIFT_MYSQL_DB_HOST|| creds.host;
var port = process.env.OPENSHIFT_MYSQL_DB_PORT;

var sequelize = new Sequelize(db, user, password, {
  host: host,
  dialect: 'mysql',
  port: port,

  pool: {
    max: 5,
    min: 0,
    idle: 10000
  },

  define: {
    timestamps: false // true by default
  }
});

module.exports = sequelize;
