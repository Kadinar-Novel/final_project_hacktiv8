import React, { Component } from 'react';
import {Navbar, Nav, NavItem, NavDropdown, MenuItem} from 'react-bootstrap';
import {FontAwesomeIcon} from '@fortawesome/react-fontawesome';
import {faSearch} from '@fortawesome/free-solid-svg-icons';
import './index.css';
import {Link} from 'react-router-dom';

const elementSearch = <FontAwesomeIcon icon={faSearch} />

class NavBar extends Component {
    render() {
        return (
            <div>
                <Navbar inverse collapseOnSelect>
                    <Navbar.Header>
                        <Navbar.Brand>
                         <Link to="/"><b>9GAG</b></Link>
                        </Navbar.Brand>
                        <Navbar.Toggle />
                    </Navbar.Header>
                    <Navbar.Collapse>
                        <Nav pullLeft>
                            <NavItem eventKey={1} href="#">
                                Get Our App!
                            </NavItem>
                            <NavItem eventKey={2} href="#">
                                League of Legends
                            </NavItem>
                            <NavItem eventKey={3} href="#">
                                Anime and Manga
                            </NavItem>
                            <NavItem eventKey={3} href="#">
                                Join Us!
                            </NavItem>
                            <NavItem eventKey={3} href="#">
                                Anime and Manga
                            </NavItem>
                            <NavItem eventKey={3} href="#">
                                Official 9GAG Shop
                            </NavItem>
                            <NavItem eventKey={3} href="#">
                                Fun Off Contest
                            </NavItem>
                        </Nav>
                        <Nav pullRight>
                            <NavItem eventKey={1} href="#">
                                {elementSearch}
                            </NavItem>
                            <NavItem eventKey={2} href="#">
                                <a href="#" onClick={()=> window.open("http://localhost/my-web-react/backend/", "_blank")}>Login</a>
                            </NavItem>
                            <NavItem eventKey={3} href="#">
                                Signup
                            </NavItem>
                        </Nav>
                    </Navbar.Collapse>
                    </Navbar>
            </div>
        );
    }
}

export default (NavBar);