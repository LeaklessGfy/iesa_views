var Sequelize = require('sequelize'); 
var sequelize = require('./../src/sequelize');

var UsersUnprotected = sequelize.define('users', 
{
  email: {
    type: Sequelize.STRING
  },
  password: {
    type: Sequelize.STRING
  },
  name: {
    type: Sequelize.STRING
  },
  lastname: {
    type: Sequelize.STRING
  },
  status: {
    type: Sequelize.INTEGER
  },
  age: {
    type: Sequelize.INTEGER
  },
  id_card: {
    type: Sequelize.STRING
  },
  id_facebook: {
    type: Sequelize.STRING
  },
  id_snapchat: {
    type: Sequelize.STRING
  },
  avatar: {
    type: Sequelize.STRING
  }
});

UsersUnprotected.api = {
  filters: null,
  includes: null,
  requirements: ["email", "password"]
};

module.exports = UsersUnprotected;
