import React, { Component } from 'react';
import { MDBCol, MDBContainer, MDBRow, MDBFooter } from "mdbreact";
import {Link} from "react-router-dom";

export default class Footer extends Component {
    render() {
        return (
            <div>
                <MDBFooter color="blue" className="font-small pt-4 mt-4">
                <MDBContainer fluid className="text-center text-md-left">
                    <MDBRow>
                    <MDBCol md="6">
                        <h5 className="title">Hacktiv8</h5>
                        <p>
                        Work Hard, Play Hard
                        </p>
                    </MDBCol>
                    <MDBCol md="6">
                        <h5 className="title">Links</h5>
                        <ul>
                        <li className="list-unstyled">
                            <Link to="/">Home</Link>
                        </li>
                        <li className="list-unstyled">
                            <Link to="/funny">Funny</Link>
                        </li>
                        <li className="list-unstyled">
                            <Link to="/animals">Animals</Link>
                        </li>
                        <li className="list-unstyled">
                            <Link to="/manga">Anime & Manga</Link>
                        </li>
                        </ul>
                    </MDBCol>
                    </MDBRow>
                </MDBContainer>
                <div className="footer-copyright text-center py-3">
                    <MDBContainer fluid>
                    &copy; {new Date().getFullYear()} Copyright: <a href="https://www.kadinarnovel.my.id" target="_blank"> Kadinar Novel </a>
                    </MDBContainer>
                </div>
                </MDBFooter>
            </div>
        )
    }
}
