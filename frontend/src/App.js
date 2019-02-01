import React, { Component } from 'react';
import './App.css';
import Home from './pages/home';
import Funny from './pages/funny';
import Animals from './pages/animals';
import Manga from './pages/manga';
import {Route,Switch} from 'react-router-dom';

class App extends Component {
  render() {
    return (
      <div>        
        <Switch>
          <Route exact path="/" component={Home} />
          <Route exact path="/funny" component={Funny} />
          <Route exact path="/animals" component={Animals} />
          <Route exact path="/manga" component={Manga} />
        </Switch>
      </div>
    );
  }
}

export default App;
