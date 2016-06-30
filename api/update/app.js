const http         = require('http'),
      fs           = require('fs'),
      path         = require('path'),
      contentTypes = require('./utils/content-types'),
      sysInfo      = require('./utils/sys-info'),
      env          = process.env;

var restify = require('restify');
var Seq = require('sequelize');

var server = restify.createServer();
server.use(restify.acceptParser(server.acceptable));
server.use(restify.queryParser());
server.use(restify.bodyParser());

//DEFAULT ROUTE
server.get('/health', function(req, res, next) {
  res.writeHead(200);
  res.end();

  return next();
});

server.get('/info/gen', function(req, res, next) {
  res.header('Content-Type', 'application/json');
  res.header('Cache-Control', 'no-cache, no-store');
  res.end(JSON.stringify(sysInfo[req.url.slice(6)]()));

  return next();
});
//

//API
var entry = "/api/1";
var controllers = require('./src/controllers');
var sequelize = require('./src/sequelize');
var utils = require('./src/utils');

//ENTITY
var Candidates = require('./entity/Candidates');
var Users = require('./entity/Users');
var Scripts = require('./entity/Scripts');
var Swipes = require('./entity/Swipes');

Users.hasMany(Swipes);
Swipes.belongsTo(Users);
Seq.sync;

function badRequest(res, msg) {
  res.writeHead(400, {'Content-Type': 'application/json; charset=utf-8'});
  res.end(JSON.stringify({error: msg}));
};

function checkId(res, id) {
  if(typeof id == "undefined" || isNaN(id)) {
    return false;
  }

  return true;
};

//ROUTES
//USERS
server.get(entry + '/users', function(req, res, next) {
  var config = utils.getFilters(["email", "password"], req.query);
  config.include = [{model: Swipes}];

  Users.findAll(config).then(function(users) {
    for(var i = 0; i < users.length; i++) {
      delete users[i]["dataValues"]["password"];
    }

    res.end(JSON.stringify(users));
  });
});

server.get(entry + '/users/:id', function(req, res, next) {
  if(!checkId(res, req.params.id)) {
    badRequest(res, "bad request");
    return next();
  };

  var config = {
    where: {
      id: req.params.id
    }
  };
  config.include = [{model: Swipes}];

  Users.findOne(config).then(function(user) {
    delete user["dataValues"]["password"];
    console.log(user.getSwipes());
    res.end(JSON.stringify(user));
  });
});

server.post(entry + '/users', function(req, res, next) {
  var isValid = utils.notBlank(["password", "email"], req.body);

  if(isValid.status == false) {
    res.end(JSON.stringify(isValid));
  }

  Users
  .build(req.body)
  .save()
  .then(function(anotherTask) {
    res.end(JSON.stringify(anotherTask));
  }).catch(function(error) {
    res.end(JSON.stringify(error));
  })
});

server.put(entry + '/users/:id', function(req, res, next) {
  if(!checkId(res, req.params.id)) {
    badRequest(res, "bad request");
    return next();
  };

  var isValid = utils.notBlank(["password", "email"], req.body);

  if(isValid.status == false) {
    badRequest(res, isValid);
    return next();
  };

  Post.update(
    req.body
  , {
    where: {
      id: req.params.id
    }
  }).then().catch();
});


//SCRIPTS
server.get(entry + '/scripts', function(req, res, next) {
  var config = {};

  Scripts.findAll(config).then(function(scripts) {
    res.end(JSON.stringify(scripts));
  });
});

server.get(entry + '/scripts/:id', function(req, res, next) {
  if(!checkId(res, req.params.id)) {
    badRequest(res, "bad request");
    return next();
  };

  var config = {
    where: {
      id: req.params.id
    }
  };

  Scripts.findOne(config).then(function(scripts) {
    res.end(JSON.stringify(scripts));
  });
});

server.post(entry + '/scripts', function(req, res, next) {
  var isValid = utils.notBlank(["title", "description"], req.body);

  if(isValid.status == false) {
    res.end(JSON.stringify(isValid));
  };

  Scripts
  .build(req.body)
  .save()
  .then(function(anotherTask) {
    res.end(JSON.stringify(anotherTask));
  }).catch(function(error) {
    res.end(JSON.stringify(error));
  })
});


//SWIPES
server.get(entry + '/swipes', function(req, res, next) {
  //var config = utils.getFilters(["email", "username", "password"], req.query);
  var config = {
    include: [{
        model: Users,
        where: { state: sequelize.col('swipes') }
    }]
  };

  config = {};
  config.include = [{model: Users}];

  Swipes.findAll(config).then(function(swipes) {
    res.end(JSON.stringify(swipes));
  });
});

server.listen(env.NODE_PORT || 3000, env.NODE_IP || 'localhost', function () {
  console.log(`Application worker ${process.pid} started...`);
});
