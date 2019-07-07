/*eslint-disable*/
import React,{ Component } from "react";
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import './login.css';
import axios from 'axios';
//import { Button, Form, FormGroup, Label, Input, FormText } from 'reactstrap';
export default class Login extends Component{
  constructor(props)
   {
    
       super(props);
       this.onSubmit=this.onSubmit.bind(this);
       this.onChangePhone=this.onChangePhone.bind(this);
       this.onChangePass=this.onChangePass.bind(this);
       this.state={
           phone:"",
           pass:""
           
       }
   }
   onChangePass(e)
   {
        console.log(e.target);
       this.setState({
           pass:e.target.value
       });
    }
   onChangePhone(e)
   {
       this.setState({
           phone:e.target.value
       });
   }
   onSubmit(e)
   {
    e.preventDefault();
     const lobj={
         phone:this.state.phone,
         password:this.state.pass
     }
    axios({
        method: 'post',
        url: 'http://13.250.22.136/loginvalidate_json.php',
        data: lobj,
        config: { headers: {'Content-Type': 'application/json','Access-Control-Allow-Credentials' : true,
        'Access-Control-Allow-Origin':'*',
        'Access-Control-Allow-Methods':'*',
        'Access-Control-Allow-Headers':'application/json' }}
    })
    .then( (response)=> {
        //handle success
        console.log(response)
        this.props.history.push('/volunteer/home');
    })
    .catch(function (response) {
        //handle error
        console.log(response)
    });
     console.log(this.state.phone)
   }
   render(){
       return(  
        <div className="wrapper">      
            <div className="login_box">

                <div className="login_header">
                    <h1>CareWorks Foundation!</h1>
                </div>
                <br/>
                <div id="first">

                    <form>
                        <input type="number" value={this.state.phone} onChange={this.onChangePhone} name="phone" placeholder="Mobile Number" required/>
                        <br/>
                        <input type="password" value={this.state.pass} onChange={this.onChangePass} name="password" placeholder="Password"/>
                        <br/>
                        <button className='submit' type="submit" name="login_button" onClick={this.onSubmit} value="Login">Login</button>
                        <br/>
                        <Link to='/signup' >Need and account? Register here!></Link>>

                    </form>

                
                </div>
            </div>
        </div>
       );
   }
}