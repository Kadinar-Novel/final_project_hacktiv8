import React, { Component } from 'react';
import NavBar from  '../../components/NavBar';
import SideBar from '../../components/SideBarManga';
import Footer from '../../components/Footer';
import './index.css';

export default class Home extends Component {
    render() {
        return (
            <div>
                <NavBar />
                <SideBar />
                <hr/>
                <Footer />
            </div>
        )
    }
}
