import React from 'react';
import {useState} from 'react';
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import axios from 'axios';

function Login(){
  const [formValue, setformValue] = useState({
    email: '',
    password:''
  })

  const onChange = (e) => {
    e.persist();
    setformValue({...formValue, [e.target.name]: e.target.value});
  }

  const handleSubmit = (e) => {
    if(e && e.preventDefault()) e.preventDefault();
    const formData = new FormData();
    formData.append("email", formValue.email)
    formData.append("password", formValue.password)
    axios.post("http://localhost:8888/topicos/public/api/login",
    formData,
    {headers: {'Content-Type': 'multipart/form-data',
      'Accept':'application/json'}}
    ).then(response => {
        console.log('response');
        console.log(response);

    }).catch(error =>{
        console.log(error);
    });
  };

    return (
      <Form onSubmit={handleSubmit}>
        <Form.Group className='mb-3' controlId="formBasicEmail">
          <Form.Label>Email Address</Form.Label>
          <Form.Control type="email" placeholder="Enter email"
            name="email" value={formValue.email} onChange={onChange} />
            <Form.Text className="text-muted">
              Formulario para ingresar las credenciales
            </Form.Text>
        </Form.Group>
        <Form.Group className='mb-3' controlId="formBasicPassword">
          <Form.Label>Email Address</Form.Label>
          <Form.Control type="password" placeholder="Password"
            name="password" value={formValue.password} onChange={onChange} /> 
        </Form.Group>
        <Button></Button>
      </Form>
      
    );


}

export default Login;