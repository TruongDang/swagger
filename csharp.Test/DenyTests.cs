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
    ///  Class for testing Deny
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the model.
    /// </remarks>
    [TestFixture]
    public class DenyTests
    {
        private Deny instance;

        /// <summary>
        /// Setup before each test
        /// </summary>
        [SetUp]
        public void Init()
        {
            instance = new Deny();
        }
    
        /// <summary>
        /// Clean up after each test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }   

        /// <summary>
        /// Test an instance of Deny
        /// </summary>
        [Test]
        public void DenyInstanceTest()
        {
            Assert.IsInstanceOf<Deny> (instance, "instance is a Deny");
        }

        
        /// <summary>
        /// Test the property 'User' 
        /// </summary>
        [Test]
        public void UserTest()
        {
            // TODO: unit test for the property 'User' 
        }
        
        /// <summary>
        /// Test the property 'Role' 
        /// </summary>
        [Test]
        public void RoleTest()
        {
            // TODO: unit test for the property 'Role' 
        }
        

    }

}
