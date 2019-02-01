import React, { Component } from 'react';
import SideNav, { Toggle, Nav, NavItem, NavIcon, NavText } from '@trendmicro/react-sidenav';
import '@trendmicro/react-sidenav/dist/react-sidenav.css';
import {Grid, Row, Col, ListGroup, ListGroupItem} from 'react-bootstrap';
import {FontAwesomeIcon} from '@fortawesome/react-fontawesome';
import {faAirFreshener,faCat,faBookReader} from '@fortawesome/free-solid-svg-icons';
import './index.css';
import Axios from  'axios';
import {Link} from 'react-router-dom';

const elmfunny = <FontAwesomeIcon icon={faAirFreshener} />
const elmAnimals = <FontAwesomeIcon icon={faCat} />
const elmManga = <FontAwesomeIcon icon={faBookReader} />



export default class SideBar extends Component {    
constructor(){
    super()
    this.state={
        people: []
    }
}

componentDidMount(){
    Axios.get("http://localhost/my-web-react/backend/api/json_manga.php")
    .then(response => {
        console.log(response.data)
        this.setState({
            people: response.data
        })
    })
    .catch(() => {
        console.error()
    })
}

    render() {
        return (
            <Grid>
            <Row className="show-grid">
                <Col xs={12} md={2}>
                SECTONS <br/>
                <ListGroup>
                    <ListGroupItem>{elmfunny} <Link to="/funny">Funny</Link></ListGroupItem>
                    <ListGroupItem>{elmAnimals} <Link to="/animals">Animals</Link> </ListGroupItem>
                    <ListGroupItem>{elmManga}   <Link to="/manga">Anime & Manga</Link> </ListGroupItem>
                </ListGroup>;
                </Col>
                <Col xs={6} md={8}>
                <div>
                    <h1>Anime & Manga</h1>
                    <ul className="contain">
                        {this.state.people.map(p => 
                        <li className="li-jeda">{p.judul_pic}<br/>
                        <img src={`http://localhost/my-web-react/backend/pages/images/${p.pic}`} width="200px" />                    
                        </li>)}
                    </ul>
                </div>
                </Col>
            </Row>
            </Grid> 
        );
    }
}
