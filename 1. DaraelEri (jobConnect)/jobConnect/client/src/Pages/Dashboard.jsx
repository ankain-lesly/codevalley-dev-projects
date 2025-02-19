import React from 'react';  
import { FaBriefcase, FaUsers, FaChartPie, FaClipboardList } from 'react-icons/fa';  

const Dashboard = () => {  
  return (  
    <div className="flex">  
      {/* Sidebar */}  
      <aside className="bg-blue-600 text-white w-64 min-h-screen p-6">  
        <h1 className="text-2xl font-bold mb-8">Job Portal</h1>  
        <nav>  
          <a href="#" className="flex items-center mb-4 text-gray-200 hover:text-white text-lg">  
            <FaBriefcase className="mr-2" /> Dashboard  
          </a>  
          <a href="#" className="flex items-center mb-4 text-gray-200 hover:text-white text-lg">  
            <FaUsers className="mr-2" /> Candidates  
          </a>  
          <a href="#" className="flex items-center mb-4 text-gray-200 hover:text-white text-lg">  
            <FaClipboardList className="mr-2" /> Job Listings  
          </a>  
          <a href="#" className="flex items-center mb-4 text-gray-200 hover:text-white text-lg">  
            <FaChartPie className="mr-2" /> Analytics  
          </a>  
        </nav>  
      </aside>  

      {/* Main Content */}  
      <main className="flex-1 p-6">  
        <h2 className="text-3xl font-semibold mb-4">Dashboard</h2>  

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">  
          {/* Job Applications Count Card */}  
          <div className="bg-white p-6 rounded-lg shadow-lg">  
            <h3 className="text-xl font-semibold mb-2">Total Job Applications</h3>  
            <p className="text-3xl font-bold text-blue-600">150</p>  
          </div>  

          {/* Candidates Count Card */}  
          <div className="bg-white p-6 rounded-lg shadow-lg">  
            <h3 className="text-xl font-semibold mb-2">Total Candidates</h3>  
            <p className="text-3xl font-bold text-blue-600">75</p>  
          </div>  

          {/* Job Listings Count Card */}  
          <div className="bg-white p-6 rounded-lg shadow-lg">  
            <h3 className="text-xl font-semibold mb-2">Active Job Listings</h3>  
            <p className="text-3xl font-bold text-blue-600">30</p>  
          </div>  

          {/* New Applications Card */}  
          <div className="bg-white p-6 rounded-lg shadow-lg">  
            <h3 className="text-xl font-semibold mb-2">New Applications Today</h3>  
            <p className="text-3xl font-bold text-blue-600">5</p>  
          </div>  
        </div>  

        {/* Recent Job Applications Section */}  
        <section className="mt-10">  
          <h2 className="text-2xl font-semibold">Recent Job Applications</h2>  
          <div className="bg-white rounded-lg shadow-lg mt-4">  
            <table className="min-w-full divide-y divide-gray-200">  
              <thead className="bg-gray-100">  
                <tr>  
                  <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Candidate Name</th>  
                  <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Job Title</th>  
                  <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>  
                  <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Applied</th>  
                </tr>  
              </thead>  
              <tbody className="divide-y divide-gray-200">  
                {[  
                  { name: 'Alice Johnson', job: 'Software Engineer', status: 'Pending', date: '2023-10-12' },  
                  { name: 'Bob Smith', job: 'Data Analyst', status: 'Reviewed', date: '2023-10-11' },  
                  { name: 'Charlie Brown', job: 'UI/UX Designer', status: 'Accepted', date: '2023-10-10' },  
                  { name: 'Diana Prince', job: 'Product Manager', status: 'Rejected', date: '2023-10-09' },  
                ].map((application, index) => (  
                  <tr key={index}>  
                    <td className="px-6 py-4 whitespace-nowrap">{application.name}</td>  
                    <td className="px-6 py-4 whitespace-nowrap">{application.job}</td>  
                    <td className="px-6 py-4 whitespace-nowrap">{application.status}</td>  
                    <td className="px-6 py-4 whitespace-nowrap">{application.date}</td>  
                  </tr>  
                ))}  
              </tbody>  
            </table>  
          </div>  
        </section>  
      </main>  
    </div>  
  );  
};  

function App() {  
  return <Dashboard />;  
}  

export default App;