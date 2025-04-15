const express = require('express');
const app = express();
const morgan = require('morgan');
const bodyParser = require('body-parser');
const mongoose = require('mongoose');

const productRoutes = require('./api/routes/products');
const orderRoutes = require('./api/routes/orders');

app.use(morgan('dev'));
app.use(bodyParser.urlencoded({extended: false}));
app.use(bodyParser.json());
app.use(express.json());


//mongoose.connect('mongodb+srv://godxtationsa:' +
  //  process.env.MONGO_ATLAS_PW 
 //   + '@node-rest-workshop.bmkfl6i.mongodb.net/?retryWrites=true&w=majority&appName=node-rest-workshop')
 // .then(() => {
//    console.log(' Connected to MongoDB');
//    app.listen(3000, () => {
 //     console.log(' Server running on port 3000');
  //  });
 // })
  //.catch(err => {
   // console.error('DB connection error:', err);
 // });

  mongoose.connect(
    'mongodb+srv://godxtationsa:stein_list2003@node-rest-workshop.bmkfl6i.mongodb.net/?retryWrites=true&w=majority&appName=node-rest-workshop',
    { useNewUrlParser: true, useUnifiedTopology: true }
  ).then(() => {
    console.log('✅ Connected to MongoDB Atlas');
  }).catch(err => {
    console.error('❌ MongoDB connection error:', err);
  });

app.use('/products', productRoutes);
app.use('/orders', orderRoutes);

app.use((req, res, next) => {
    res.header("Access-Control-Allow-Origin", "*")
    res.header(
        "Access-Control-Allow-Headers",
        "Origin, X-Requested-With, Content-Type, Accept, Authorization"
    );
    if(req.method === 'OPTIONS') {
        res.header('Access-Control-Allow-Methods', 'PUT, POST, PATCH, DELETE, GET')
        return res.header(200).json({});
    }
    next;
});


app.use((req, res, next) => {
    const error = new Error('Not Found');
    error.status = 404;
    next(error);
});

app.use((error, req, res, next) => {
    res.status(error.status || 500);
    res.json({
        error: {
            message: error.message
        }
    });
});

module.exports = app;