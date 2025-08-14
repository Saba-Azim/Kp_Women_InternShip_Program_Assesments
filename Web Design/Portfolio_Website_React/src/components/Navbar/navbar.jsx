import React, { useState } from 'react'
import './navbar.css'
import logo from '../../assets/logo.png'
import AnchorLink from 'react-anchor-link-smooth-scroll';

const navbar = () => {
  const [menu, setMenu] = useState("home");
  return (
    <div className='navbar'>
      <img src={logo} alt="Logo" />

      <ul className="nav-menu">
        <li>
          <AnchorLink className='anchor-link' offset="50" href="#home">
            Home
          </AnchorLink>
        </li>
        <li>
          <AnchorLink className='anchor-link' offset="50" href="#about">
            About Me
          </AnchorLink>
        </li>
        <li>
          <AnchorLink className='anchor-link' offset="50" href="#services">
            Services
          </AnchorLink>
        </li>
        <li>
          <AnchorLink className='anchor-link' offset="50" href="#work">
            Portfolio
          </AnchorLink>
        </li>
        <li>
          <AnchorLink className='anchor-link' offset="50" href="#contact">
            Contact
          </AnchorLink>
        </li>
      </ul>

      <div className="nav-connect">
        Connect with Me
      </div>
    </div>

  )
}

export default navbar