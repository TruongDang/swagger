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
    ///  Class for testing Write
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the model.
    /// </remarks>
    [TestFixture]
    public class WriteTests
    {
        private Write instance;

        /// <summary>
        /// Setup before each test
        /// </summary>
        [SetUp]
        public void Init()
        {
            instance = new Write();
        }
    
        /// <summary>
        /// Clean up after each test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }   

        /// <summary>
        /// Test an instance of Write
        /// </summary>
        [Test]
        public void WriteInstanceTest()
        {
            Assert.IsInstanceOf<Write> (instance, "instance is a Write");
        }

        
        /// <summary>
        /// Test the property 'Allow' 
        /// </summary>
        [Test]
        public void AllowTest()
        {
            // TODO: unit test for the property 'Allow' 
        }
        
        /// <summary>
        /// Test the property 'Deny' 
        /// </summary>
        [Test]
        public void DenyTest()
        {
            // TODO: unit test for the property 'Deny' 
        }
        

    }

}
