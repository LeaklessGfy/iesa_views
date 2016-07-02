var Sequelize = require('sequelize'); 
var sequelize = require('./../src/sequelize');

var Homepages = sequelize.define('homepages', { 
	title: {
		type: Sequelize.STRING
	},
	img: {
		type: Sequelize.STRING
	},
	path: {
		type: Sequelize.STRING
	},
	active: {
		type: Sequelize.INTEGER
	}
});

Homepages.api = {
	filters: ["active"],
	includes: null,
	requirements: ['title', 'img', 'path']
};

module.exports = Homepages;
