var Sequelize = require('sequelize'); 
var sequelize = require('./../src/sequelize');

var UsersUnprotected = sequelize.define('users', 
{
  email: {
    type: Sequelize.STRING
  },
  password: {
    type: Sequelize.STRING
  }
});

UsersUnprotected.api = {
  filters: null,
  includes: null,
  requirements: ["email", "password"]
};

module.exports = UsersUnprotected;
