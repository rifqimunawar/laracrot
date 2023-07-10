import { Head } from "@inertiajs/react";
import { AiOutlineMenu } from "react-icons/ai";

const Navbar = () => {
  return (
    <>
      <div className="appHeader bg-primary text-light">
        <div className="left">
          <img
            style={{ width: "32px", height: "32px", objectFit: "cover" }}
            src="/mobile_assets/assets/img/logokomi.png"
            alt="logo"
            className="logo"
          />
          <h3 style={{ color: "yellow", paddingLeft: "10px", margin: 0 }}>
            PMII UNINUS
          </h3>
          {/* <a href="#" className="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
            <AiOutlineMenu size={20}/>
          </a> */}
        </div>
        <div className="pageTitle text-center"></div>
        <div className="right">
          {/* <a href="app-notifications.html" className="headerButton">
            <ion-icon className="icon" name="notifications-outline"></ion-icon>
            <span className="badge badge-danger">4</span>
          </a> */}
          <a href="app-settings.html" className="headerButton">
            <img
              src="/mobile_assets/assets/img/logokomi.png"
              alt="image"
              className="imaged w32"
            />
            <span className="badge badge-danger">6</span>
          </a>
        </div>
      </div>
    </>
  );
};

export default Navbar;
