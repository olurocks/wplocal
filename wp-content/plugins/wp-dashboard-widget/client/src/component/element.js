import React, { useState,useEffect } from 'react';
import { LineChart, XAxis, YAxis, CartesianGrid, Line } from 'recharts';
import axios from 'axios';

const Select =(props) => {
  return (
    <select onChange={props.handleEventChange} value = {props.value}>
      <option value = "7">Last 7 days</option>
      <option value = "15">Last 15 days</option>
      <option value = "30">Last 1 month</option>
    </select> 
    );
};

const GraphWidget = () => {
  const [chartData, setChartData] = useState([]);
  const [duration, setTimeFrame] = useState(['7'])

  useEffect(() => {
    const fetchData = async() => {
      const response = await axios.get(`penguin.linux.test/wordpressLocal/wp-json/getsdata/v1/chart_data/${duration}`);
      let result = JSON.parse(await response.data);
      setChartData(result)
    }
    fetchData()
  }, [duration]);

  const handleEventChange =(event) => {
    setTimeFrame(event.target.value);
  }

  return (
    <div>
      <div className='Dashboard Widget'>
        <Select handleEventChange = {handleEventChange} value = {duration}/>
      </div>
      <LineChart width={500} height={300} data={chartData}>
        <XAxis dataKey="date"/>
        <YAxis/>
        <CartesianGrid stroke="#eee" strokeDasharray="5 5"/>
        <Line type="monotone" dataKey="visitors" stroke="#8884d8" />
        <Line type="monotone" dataKey="amt_spent" stroke="#82ca9d" />

      </LineChart>
    </div>

  );
};

export default GraphWidget;

