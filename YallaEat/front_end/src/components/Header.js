import React from "react";
import {} from "@mui/material";
import { BarChart } from "@mui/icons-material";
import logo from "../images/YallaEat.png";
import profil from "../images/profil.jpg";
function Header() {
  return (
    <header>
      <div className="imgtit">
        <img src={logo} alt="" className="logo" />
        <h3>
          <span>Y</span>alla<span>E</span>at
        </h3>
      </div>

      <div className="profileContainer">
        <div className="imgBox">
          <img src={profil} alt="" />
        </div>
        <h2 className="userName">rania ben chaaben</h2>

        <div className="toggleMenu">
          <BarChart className="toggleIcon" />
        </div>
      </div>
    </header>
  );
}
export default Header;
