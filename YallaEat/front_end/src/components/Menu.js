import React from "react";

function Menu({ link, icon }) {
  return (
    <li>
      <a href={link}>
        <span className="icon">{icon}</span>
      </a>
    </li>
  );
}
export default Menu;
