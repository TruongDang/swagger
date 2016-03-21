using NUnit.Framework;

using System;
using System.Linq;
using System.IO;
using System.Collections.Generic;
using IO.Swagger.Api;
using IO.Swagger.Model;
using IO.Swagger.Client;
using System.Reflection;

namespace IO.Swagger.Test
{
    /// <summary>
    ///  Class for testing Query
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the model.
    /// </remarks>
    [TestFixture]
    public class QueryTests
    {
        private Query instance;

        /// <summary>
        /// Setup before each test
        /// </summary>
        [SetUp]
        public void Init()
        {
            instance = new Query();
        }
    
        /// <summary>
        /// Clean up after each test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }   

        /// <summary>
        /// Test an instance of Query
        /// </summary>
        [Test]
        public void QueryInstanceTest()
        {
            Assert.IsInstanceOf<Query> (instance, "instance is a Query");
        }

        
        /// <summary>
        /// Test the property 'IncludeList' 
        /// </summary>
        [Test]
        public void IncludeListTest()
        {
            // TODO: unit test for the property 'IncludeList' 
        }
        
        /// <summary>
        /// Test the property 'Include' 
        /// </summary>
        [Test]
        public void IncludeTest()
        {
            // TODO: unit test for the property 'Include' 
        }
        

    }

}