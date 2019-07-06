/*eslint-disable*/
import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route } from "react-router-dom";
import logo from './logo.svg';
import './App.css';
import  Login from './components/login/login.js';
import  signup from './components/signup/signup.js';
import home from './components/volunteer/home.js';
function App() {
  return (
    <div className="App">
     <Router >
     <Route path = "/" component = {Login} exact/>
     <Route path ="/signup" component={signup}/>
     <Route path="/volunteer/home" component={home}/>
      </Router>
    </div>
  );
}

export default App;
