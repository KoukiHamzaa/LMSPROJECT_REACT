import React, { Component, Fragment } from "react";

class  NavBar extends Component {
  state = {};
  render() {
    const logoPath = "../images/logo";
    return (
      <React.Fragment>
{/* Navbar */}
<div className="bs-example">
    <nav className="navbar navbar-expand-md navbar-light bg-light">
        <a href="#" className="navbar-brand">
            <img src="../images/calculatorBackground.jpg" height="28" alt="CoolBrand" />
        </a>
        <button type="button" className="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span className="navbar-toggler-icon"></span>
        </button>

        <div className="collapse navbar-collapse" id="navbarCollapse">
            <div className="navbar-nav">
                <a href="#" className="nav-item nav-link active">Home</a>
                <a href="#" className="nav-item nav-link">Profile</a>
                <a href="#" className="nav-item nav-link">Messages</a>
                <a href="#" className="nav-item nav-link disabled" tabindex="-1">Reports</a>
            </div>
            <div className="navbar-nav ml-auto">
                <a href="#" className="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
</div>
{/* Navbar */}
      </React.Fragment>
    );
  }
}

export default NavBar;
