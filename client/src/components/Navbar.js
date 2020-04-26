import React, { Component } from "react";
import logo from "../LogoBrain.svg";
export default class Navbar extends Component {
  render() {
    return (
      <nav className="navbar navbar-expand-sm navbar-dark px-sm-5">
        <img src={logo} alt="store" className="navbar-brand" />
        <ul className="navbar-nav align-items-center">
          <li className="nav-item ml-5">
            {/* <Link to="/" className="nav-link"> */}
              products
            {/* </Link> */}
          </li>
        </ul>
      </nav>
    );
  }
}
