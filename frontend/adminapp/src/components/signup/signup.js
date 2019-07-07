import React,{ Component } from "react";
import axios from 'axios';
export default class Signup extends Component{
    constructor(props)
    {
     
        super(props);
        
        this.onChange=this.onChange.bind(this);
        this.onSubmit=this.onSubmit.bind(this);
        this.state={
            phone:"",
            pass:"",
            cpass:"",
            name:"",
            email:"",
            age:"",
            addr:"",
            skill:"",
            comp:""
            
        }
    }

    onChange(event, props){
        this.setState({[props]:event.target.value})
       
    }
    onSubmit(e)
    {
     e.preventDefault();
    
     const vobj={
         name:this.state.name,
         email:this.state.email,
         phone:this.state.phone,
         age:this.state.age,
         address:this.state.addr,
         skillset:this.state.skill,
         company:this.state.comp,
         num_events:0,
         totalhrs:0,
         password:this.state.pass
        
     }

     axios({
        method: 'post',
        url: 'http://13.250.22.136/add_event_json.php',
        data: vobj,
        config: { headers: {'Content-Type': 'application/json','Access-Control-Allow-Credentials' : true,
        'Access-Control-Allow-Origin':'*',
        'Access-Control-Allow-Methods':'*',
        'Access-Control-Allow-Headers':'application/json' }}
    })
    .then( (response)=> {
        //handle success
        console.log(response)
        this.props.history.push('/');
    })
    .catch(function (response) {
        //handle error
        console.log(response)
    });
     
      console.log(this.state.name)
    }
    render(){
        return(
            <form >
            <input  type="text" name="name" value={this.state.name} placeholder="Name" onChange={(event)=>{this.onChange(event, 'name')}} required/>
            <br/>
            <input  type="password" name="pass" value={this.state.pass} placeholder="Password" onChange={(event)=>{this.onChange(event, 'pass')}} required/>
            <br/>
            <input  type="password" name="cpass" value={this.state.cpass} placeholder="Confirm Password" onChange={(event)=>{this.onChange(event, 'cpass')}} required/>
            <br/>
            <input type="number" name="phone" value={this.state.phone} placeholder="Phone number" onChange={(event)=>{this.onChange(event, 'phone')}}required/>
            <br/>

            <input type="email" name="email" value={this.state.email} placeholder="Email" onChange={(event)=>{this.onChange(event, 'email')}}required/>
            <br/>

            <input type="text" name="age" value={this.state.age} placeholder="Age" onChange={(event)=>{this.onChange(event, 'age')}} required/>
            <br/>

            <input type="text" name="address" value={this.state.addr} placeholder="Address" onChange={(event)=>{this.onChange(event, 'addr')}}required/>
            <br/>
            <input type="text" name="skillset" value={this.state.skill} placeholder="Skillset" onChange={(event)=>{this.onChange(event, 'skill')}} required/>
            <br/>
            <input type="text" name="company" value={this.state.comp} placeholder="Company" onChange={(event)=>{this.onChange(event, 'comp')}}/>
            <br/>
            


            <button type="submit" onClick={this.onSubmit} >Register</button>
            <br/>

            
        </form>)
    }
}