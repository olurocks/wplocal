import React, { useState, useEffect } from 'react';
import { LineChart, Line, XAxis, YAxis, CartesianGrid, Tooltip, Legend } from 'recharts';

function App() {
  const [data, setData] = useState([]);
  const [period, setPeriod] = useState('7');

  useEffect(() => {
    async function fetchData() {
      const res = await fetch(`/wp-json/wp/v2/posts?per_page=${period}`);
      const posts = await res.json();
      setData(posts);
    }
    fetchData();
  }, [period]);

  return (
    <>
      <select value={period} onChange={e => setPeriod(e.target.value)}>
        <option value="7">Last 7 Days</option>
        <option value="15">Last 15 Days</option>
        <option value="30">Last 1 Month</option>
      </select>
      <LineChart width={500} height={300} data={data} margin={{ top: 5, right: 30, left: 20, bottom: 5 }}>
        <CartesianGrid strokeDasharray="3 3" />
        <XAxis dataKey="id" />
        <YAxis />
        <Tooltip />
        <Legend />
        <Line type="monotone" dataKey="id" stroke="#8884d8" />
      </LineChart>
    </>
  );
}

export default App;


INSERT INTO staticData (date, visitors, amt_spent, views)
VALUES
  ('2022-01-01', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-02', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-03', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-04', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-05', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-06', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-07', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-08', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-09', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-10', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-11', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-12', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-13', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-14', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-15', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-16', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-17', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-18', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-19', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-20', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-21', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-22', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-23', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-24', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-25', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-26', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-27', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-28', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-29', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000)),
  ('2022-01-30', FLOOR(RAND()*1000), FLOOR(RAND()*1000), FLOOR(RAND()*1000));
