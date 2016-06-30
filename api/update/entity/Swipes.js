var Sequelize = require('sequelize'); 
var sequelize = require('./../src/sequelize');

var Swipes = sequelize.define('swipes', {
	userId: {
		type: Sequelize.INTEGER,
		references: { model: "Users", key: "id" }
	}
});

module.exports = Swipes;