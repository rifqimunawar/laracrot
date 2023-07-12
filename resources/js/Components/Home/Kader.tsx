// Kader.jsx
import React from 'react';

type User = {
  id: string;
  name: string;
  img: string;
  kaderisasi: string;
  rayon: {
    rayon: string;
  };
};

type KaderProps = {
  users: User[];
};

const Kader: React.FC<KaderProps> = ({ users }) => {
  return (
    <div className="section mt-4 mb-4">
      <div className="section-heading">
        <h2 className="title">Kader</h2>
        <a href="app-transactions.html" className="link">
          View All
        </a>
      </div>
      {users.map((user) => (
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
  );
};

export default Kader;
