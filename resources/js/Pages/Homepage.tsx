// Homepage.jsx
import React from "react";
import { Head } from "@inertiajs/react";
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import Wallet from "@/Components/Home/Wallet";
import Statistik from "@/Components/Home/Statistic";

type HomepageProps = {
  totalMapaba: string;
  totalPKD: string;
  totalPKL: string;
  totalPKN: string;
  users: {
    id: string;
    name: string;
    kaderisasi: string;
    rayon: {
      rayon: string;
    };
  }[];
};


const Homepage = ({ totalMapaba, totalPKD, totalPKL, totalPKN, users }) => {
    console.log(users);
    return (
        <>
            <Head>
                <link
                    rel="stylesheet"
                    href="/mobile_assets/assets/css/style.css"
                />
            </Head>
            <div>
                <Navbar />
                <div id="appCapsule">
                    <Wallet />
                    <Statistik
                        totalMapaba={totalMapaba}
                        totalPKD={totalPKD}
                        totalPKL={totalPKL}
                        totalPKN={totalPKN}
                    />
                </div>

                <div className="section mt-4 mb-4">
                    <div className="section-heading">
                        <h2 className="title">Kader</h2>
                        {/* <a href="app-transactions.html" className="link">View All</a> */}
                    </div>

                    {users.data.map((user) => (
                        <div className="transactions mb-4" key={user.id}>
                            {/* item */}
                            <a href="app-transaction-detail.html" className="item">
                                <div className="detail">
                                <img
                                    src={`storage/img/${user.img}`}
                                    alt="img"
                                    className="image-block imaged"
                                    style={{ width: '48px', height: '48px', objectFit: 'cover' }}
                                  />
                                    <div>
                                        <strong>{user.name}</strong>
                                        <p>{user.kaderisasi}</p>
                                    </div>
                                </div>
                                <div className="right">
                                    <div className="price text-danger">{user.rayon.rayon}</div>
                                </div>
                            </a>
                        </div>
                    ))}

                </div>
                
                <div className="section mt-4 mb-4">
                    <h1>#salamPergerakan</h1>
                </div>
                <Footer />
            </div>
        </>
    );
};

export default Homepage;
