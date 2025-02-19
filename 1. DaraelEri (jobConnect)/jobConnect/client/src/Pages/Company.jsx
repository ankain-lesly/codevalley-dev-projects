import React from 'react';  

const companies = [  
  { name: 'Tech Company', logo: 'https://via.placeholder.com/100', description: 'Leading tech company specializing in software solutions.' },  
  { name: 'Creative Agency', logo: 'https://via.placeholder.com/100', description: 'Innovative agency providing design and marketing solutions.' },  
  { name: 'Finance Corp', logo: 'https://via.placeholder.com/100', description: 'Financial services company helping industries succeed.' },  
  { name: 'Health Solutions', logo: 'https://via.placeholder.com/100', description: 'Healthcare provider focused on innovative health solutions.' },  
];  

const Companies = () => {  
  return (  
    <div className="container mx-auto my-10 px-4">  
      <h2 className="text-3xl font-semibold text-center mb-8">Companies Hiring</h2>  
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">  
        {companies.map((company, index) => (  
          <div key={index} className="bg-white p-6 rounded-lg shadow-lg text-center">  
            <img src={company.logo} alt={company.name} className="mx-auto mb-4" />  
            <h3 className="text-xl font-bold">{company.name}</h3>  
            <p className="text-gray-600 mt-2">{company.description}</p>  
            <button className="mt-4 bg-blue-600 text-white rounded px-4 py-2 hover:bg-blue-700">  
              View Jobs  
            </button>  
          </div>  
        ))}  
      </div>  
    </div>  
  );  
};  

export default Companies;