import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';
import {Link, Outlet} from 'react-router-dom';

function BasicExample() {
  return (
    <>
    <Navbar bg="primary" expand="lg">
      <Container>
        <Navbar.Brand as={Link} to="/">Topicos</Navbar.Brand>
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="me-auto">
            <Nav.Link as={Link} to="/">Home</Nav.Link>
            <Nav.Link as={Link} to="Login">Login</Nav.Link>
            <Nav.Link  as={Link} to="Register">Register</Nav.Link>
            <Nav.Link  as={Link} to="Settings">Settings</Nav.Link>
          </Nav>
        </Navbar.Collapse>
      </Container>
    </Navbar>
      <section>
        <Container>
          <Outlet>
          </Outlet>
        </Container>
      </section>
    </>
  );
}

export default BasicExample;