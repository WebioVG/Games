/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

import React from 'react';
import ReactDOM from 'react-dom';
import Header from './Components/Header';
import Footer from './Components/Footer';

class App extends React.Component {
    constructor() {
        super();
    }

    componentDidMount() {
        // 
    }

    render() {
        return (
            <>
                <Header />
                <h2 class="text-center text-3xl">HOME</h2>
                <Footer />
            </>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('root'));