var restify = require('restify');
var controllers = require('./src/controllers');

function respond(req, res, next) {
  res.send('hello ' + req.params.name);
  next();
}

var server = restify.createServer();
server.use(restify.acceptParser(server.acceptable));
server.use(restify.queryParser());
server.use(restify.bodyParser());

server.get('/hello/:name', respond);
server.head('/hello/:name', respond);

server.get('/users', controllers.users.getAll);

server.listen(8080, function() {
  console.log('%s listening at %s', server.name, server.url);
});
