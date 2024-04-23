import "./App.css";
import { useEffect } from "react";
import Header from "./components/Header";
import Menu from "./components/Menu";
import HomeIcon from "@mui/icons-material/Home";
import DatasetIcon from "@mui/icons-material/Dataset";
import AccountBalanceWalletIcon from "@mui/icons-material/AccountBalanceWallet";
import Favorite from "@mui/icons-material/Favorite";
import BorderColorIcon from "@mui/icons-material/BorderColor";
import SettingsIcon from "@mui/icons-material/Settings";
function App() {
  useEffect(() => {
    const menuli = document.querySelectorAll("#menu li");
    function setMenuActive() {
      menuli.forEach((n) => n.classList.remove("active"));
      this.classList.add("active");
    }
    menuli.forEach((n) => n.addEventListener("click", setMenuActive));
  }, []);
  return (
    <div className="App">
      {/* Header menu */}
      <Header />
      {/* Main container */}
      {/* Bottom Menu */}
      <div className="bottomMenu">
        <ul id="menu">
          <Menu link={"#"} icon={<HomeIcon />} />
          <Menu link={"#"} icon={<DatasetIcon />} />
          <Menu link={"#"} icon={<AccountBalanceWalletIcon />} />
          <Menu link={"#"} icon={<Favorite />} />
          <Menu link={"#"} icon={<BorderColorIcon />} />
          <Menu link={"#"} icon={<SettingsIcon />} />
          <div className="indicator"></div>
        </ul>
      </div>
    </div>
  );
}

export default App;
