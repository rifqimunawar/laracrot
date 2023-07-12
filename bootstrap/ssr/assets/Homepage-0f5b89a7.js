import { j as jsx, F as Fragment, a as jsxs } from "../app.js";
import { Head } from "@inertiajs/react";
import { AiOutlineHome, AiOutlineSearch, AiOutlineArrowUp, AiOutlineAlignCenter, AiOutlineUser, AiOutlinePicture, AiOutlineRead, AiOutlinePicRight } from "react-icons/ai/index.esm.js";
import { useState, useEffect } from "react";
import { BsCalendar3Week } from "react-icons/bs/index.esm.js";
import "react/jsx-runtime";
import "axios";
import "react-dom/client";
const Navbar = () => {
  return /* @__PURE__ */ jsx(Fragment, { children: /* @__PURE__ */ jsxs("div", { className: "appHeader bg-primary text-light", children: [
    /* @__PURE__ */ jsxs("div", { className: "left", children: [
      /* @__PURE__ */ jsx(
        "img",
        {
          style: { width: "32px", height: "32px", objectFit: "cover" },
          src: "/mobile_assets/assets/img/logokomi.png",
          alt: "logo",
          className: "logo"
        }
      ),
      /* @__PURE__ */ jsx("h3", { style: { color: "yellow", paddingLeft: "10px", margin: 0 }, children: "PMII UNINUS" })
    ] }),
    /* @__PURE__ */ jsx("div", { className: "pageTitle text-center" }),
    /* @__PURE__ */ jsx("div", { className: "right", children: /* @__PURE__ */ jsxs("a", { href: "app-settings.html", className: "headerButton", children: [
      /* @__PURE__ */ jsx(
        "img",
        {
          src: "/mobile_assets/assets/img/logokomi.png",
          alt: "image",
          className: "imaged w32"
        }
      ),
      /* @__PURE__ */ jsx("span", { className: "badge badge-danger", children: "6" })
    ] }) })
  ] }) });
};
const Footer = () => {
  return /* @__PURE__ */ jsx(Fragment, { children: /* @__PURE__ */ jsxs("div", { className: "appBottomMenu", children: [
    /* @__PURE__ */ jsx("a", { href: "#", className: "item active", children: /* @__PURE__ */ jsx("div", { className: "col", children: /* @__PURE__ */ jsx("h3", { style: { display: "flex", alignItems: "center", justifyContent: "center", height: "100%" }, children: /* @__PURE__ */ jsx(AiOutlineHome, { size: 25 }) }) }) }),
    /* @__PURE__ */ jsx("a", { href: "#", className: "item", children: /* @__PURE__ */ jsx("div", { className: "col", children: /* @__PURE__ */ jsx("h3", { style: { display: "flex", alignItems: "center", justifyContent: "center", height: "100%" }, children: /* @__PURE__ */ jsx(AiOutlineSearch, { size: 25 }) }) }) }),
    /* @__PURE__ */ jsx("a", { href: "#", className: "item", children: /* @__PURE__ */ jsx("div", { className: "col", children: /* @__PURE__ */ jsx("div", { className: "action-button large", children: /* @__PURE__ */ jsx("h3", { style: { display: "flex", alignItems: "center", justifyContent: "center", height: "100%" }, children: /* @__PURE__ */ jsx(AiOutlineArrowUp, { size: 25 }) }) }) }) }),
    /* @__PURE__ */ jsx("a", { href: "#", className: "item", children: /* @__PURE__ */ jsx("div", { className: "col", children: /* @__PURE__ */ jsx("h3", { style: { display: "flex", alignItems: "center", justifyContent: "center", height: "100%" }, children: /* @__PURE__ */ jsx(AiOutlineAlignCenter, { size: 25 }) }) }) }),
    /* @__PURE__ */ jsx("a", { href: "#", className: "item", children: /* @__PURE__ */ jsx("div", { className: "col", children: /* @__PURE__ */ jsx("h3", { style: { display: "flex", alignItems: "center", justifyContent: "center", height: "100%" }, children: /* @__PURE__ */ jsx(AiOutlineUser, { size: 25 }) }) }) })
  ] }) });
};
const Wallet = () => {
  const [currentDate, setCurrentDate] = useState("");
  const [currentTime, setCurrentTime] = useState(
    (/* @__PURE__ */ new Date()).toLocaleTimeString([], { hour12: false })
  );
  useEffect(() => {
    const timerID = setInterval(() => {
      setCurrentTime((/* @__PURE__ */ new Date()).toLocaleTimeString([], { hour12: false }));
    }, 1e3);
    return () => {
      clearInterval(timerID);
    };
  }, []);
  useEffect(() => {
    const date = /* @__PURE__ */ new Date();
    const formattedDate = `${date.getDate()} ${date.toLocaleString("default", {
      month: "long"
    })} ${date.getFullYear()}`;
    setCurrentDate(formattedDate);
  }, []);
  return /* @__PURE__ */ jsx("div", { className: "section wallet-card-section pt-1", children: /* @__PURE__ */ jsxs("div", { className: "wallet-card", children: [
    /* @__PURE__ */ jsxs("div", { className: "balance", children: [
      /* @__PURE__ */ jsxs("div", { className: "left", children: [
        /* @__PURE__ */ jsx("span", { className: "title", children: currentDate }),
        /* @__PURE__ */ jsx("h3", { className: "total", children: currentTime })
      ] }),
      /* @__PURE__ */ jsx("div", { className: "right", children: /* @__PURE__ */ jsx("a", { href: "#", className: "button", "data-bs-toggle": "modal", "data-bs-target": "#depositActionSheet", children: /* @__PURE__ */ jsx(AiOutlinePicture, {}) }) })
    ] }),
    /* @__PURE__ */ jsxs("div", { className: "wallet-footer", children: [
      /* @__PURE__ */ jsx("div", { className: "item", children: /* @__PURE__ */ jsxs("a", { href: "#", "data-bs-toggle": "modal", "data-bs-target": "#withdrawActionSheet", children: [
        /* @__PURE__ */ jsx("div", { className: "icon-wrapper bg-success", children: /* @__PURE__ */ jsx(AiOutlineRead, {}) }),
        /* @__PURE__ */ jsx("strong", { children: "e-Book" })
      ] }) }),
      /* @__PURE__ */ jsx("div", { className: "item", children: /* @__PURE__ */ jsxs("a", { href: "#", "data-bs-toggle": "modal", "data-bs-target": "#sendActionSheet", children: [
        /* @__PURE__ */ jsx("div", { className: "icon-wrapper bg-success", children: /* @__PURE__ */ jsx(AiOutlinePicture, {}) }),
        /* @__PURE__ */ jsx("strong", { children: "Gallery" })
      ] }) }),
      /* @__PURE__ */ jsx("div", { className: "item", children: /* @__PURE__ */ jsxs("a", { href: "app-cards.html", children: [
        /* @__PURE__ */ jsx("div", { className: "icon-wrapper bg-success", children: /* @__PURE__ */ jsx(AiOutlinePicRight, {}) }),
        /* @__PURE__ */ jsx("strong", { children: "Post" })
      ] }) }),
      /* @__PURE__ */ jsx("div", { className: "item", children: /* @__PURE__ */ jsxs("a", { href: "#", "data-bs-toggle": "modal", "data-bs-target": "#exchangeActionSheet", children: [
        /* @__PURE__ */ jsx("div", { className: "icon-wrapper bg-success", children: /* @__PURE__ */ jsx(BsCalendar3Week, {}) }),
        /* @__PURE__ */ jsx("strong", { children: "Calendar" })
      ] }) })
    ] })
  ] }) });
};
const Statistik = (props) => {
  return /* @__PURE__ */ jsxs("div", { className: "section", children: [
    /* @__PURE__ */ jsxs("div", { className: "row mt-2", children: [
      /* @__PURE__ */ jsx("div", { className: "col-6", children: /* @__PURE__ */ jsxs("div", { className: "stat-box", children: [
        /* @__PURE__ */ jsx("div", { className: "title", children: "Mapaba" }),
        /* @__PURE__ */ jsx("div", { className: "value text-success text-center", children: props.totalMapaba })
      ] }) }),
      /* @__PURE__ */ jsx("div", { className: "col-6", children: /* @__PURE__ */ jsxs("div", { className: "stat-box", children: [
        /* @__PURE__ */ jsx("div", { className: "title", children: "PKD" }),
        /* @__PURE__ */ jsx("div", { className: "value text-success text-center", children: props.totalPKD })
      ] }) })
    ] }),
    /* @__PURE__ */ jsxs("div", { className: "row mt-2", children: [
      /* @__PURE__ */ jsx("div", { className: "col-6", children: /* @__PURE__ */ jsxs("div", { className: "stat-box", children: [
        /* @__PURE__ */ jsx("div", { className: "title", children: "PKL" }),
        /* @__PURE__ */ jsx("div", { className: "value text-success text-center", children: props.totalPKL })
      ] }) }),
      /* @__PURE__ */ jsx("div", { className: "col-6", children: /* @__PURE__ */ jsxs("div", { className: "stat-box", children: [
        /* @__PURE__ */ jsx("div", { className: "title", children: "PKN" }),
        /* @__PURE__ */ jsx("div", { className: "value text-success text-center", children: props.totalPKN })
      ] }) })
    ] })
  ] });
};
const Kader = ({ users }) => {
  return /* @__PURE__ */ jsxs("div", { className: "section mt-4 mb-4", children: [
    /* @__PURE__ */ jsxs("div", { className: "section-heading", children: [
      /* @__PURE__ */ jsx("h2", { className: "title", children: "Kader" }),
      /* @__PURE__ */ jsx("a", { href: "app-transactions.html", className: "link", children: "View All" })
    ] }),
    users.map((user) => /* @__PURE__ */ jsx("div", { className: "transactions mb-4", children: /* @__PURE__ */ jsxs("a", { href: "app-transaction-detail.html", className: "item", children: [
      /* @__PURE__ */ jsxs("div", { className: "detail", children: [
        /* @__PURE__ */ jsx(
          "img",
          {
            src: `storage/img/${user.img}`,
            alt: "img",
            className: "image-block imaged",
            style: { width: "48px", height: "48px", objectFit: "cover" }
          }
        ),
        /* @__PURE__ */ jsxs("div", { children: [
          /* @__PURE__ */ jsx("strong", { children: user.name }),
          /* @__PURE__ */ jsx("p", { children: user.kaderisasi })
        ] })
      ] }),
      /* @__PURE__ */ jsx("div", { className: "right", children: /* @__PURE__ */ jsx("div", { className: "price text-danger", children: user.rayon.rayon }) })
    ] }) }, user.id))
  ] });
};
const Homepage = ({
  totalMapaba,
  totalPKD,
  totalPKL,
  totalPKN,
  users
}) => {
  return /* @__PURE__ */ jsxs(Fragment, { children: [
    /* @__PURE__ */ jsx(Head, { children: /* @__PURE__ */ jsx("link", { rel: "stylesheet", href: "/mobile_assets/assets/css/style.css" }) }),
    /* @__PURE__ */ jsxs("div", { children: [
      /* @__PURE__ */ jsx(Navbar, {}),
      /* @__PURE__ */ jsxs("div", { id: "appCapsule", children: [
        /* @__PURE__ */ jsx(Wallet, {}),
        /* @__PURE__ */ jsx(
          Statistik,
          {
            totalMapaba,
            totalPKD,
            totalPKL,
            totalPKN
          }
        ),
        /* @__PURE__ */ jsx(Kader, { users })
      ] }),
      /* @__PURE__ */ jsx(Footer, {})
    ] })
  ] });
};
export {
  Homepage as default
};
