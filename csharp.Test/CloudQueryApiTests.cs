using System;
using System.IO;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.Reflection;
using RestSharp;
using NUnit.Framework;

using IO.Swagger.Client;
using IO.Swagger.Api;
using IO.Swagger.Model;

namespace IO.Swagger.Test
{
    /// <summary>
    ///  Class for testing CloudQueryApi
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the API endpoint.
    /// </remarks>
    [TestFixture]
    public class CloudQueryApiTests
    {
        private CloudQueryApi instance;

        /// <summary>
        /// Setup before each unit test
        /// </summary>
        [SetUp]
        public void Init()
        {
           instance = new CloudQueryApi();
        }

        /// <summary>
        /// Clean up after each unit test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }

        /// <summary>
        /// Test an instance of CloudQueryApi
        /// </summary>
        [Test]
        public void InstanceTest()
        {
            Assert.IsInstanceOf<CloudQueryApi> (instance, "instance is a CloudQueryApi");
        }

        
        /// <summary>
        /// Test Count
        /// </summary>
        [Test]
        public void CountTest()
        {
            // TODO: add unit test for the method 'Count'
            string appId = null; // TODO: replace null with proper value
            string tableName = null; // TODO: replace null with proper value
            CloudQueryCount body = null; // TODO: replace null with proper value
            
            var response = instance.Count(appId, tableName, body);
            Assert.IsInstanceOf<int?> (response, "response is int?"); 
        }
        
        /// <summary>
        /// Test Distinct
        /// </summary>
        [Test]
        public void DistinctTest()
        {
            // TODO: add unit test for the method 'Distinct'
            string appId = null; // TODO: replace null with proper value
            string tableName = null; // TODO: replace null with proper value
            CloudQueryDistinct body = null; // TODO: replace null with proper value
            
            var response = instance.Distinct(appId, tableName, body);
            Assert.IsInstanceOf<List<CloudObject>> (response, "response is List<CloudObject>"); 
        }
        
        /// <summary>
        /// Test Find
        /// </summary>
        [Test]
        public void FindTest()
        {
            // TODO: add unit test for the method 'Find'
            string appId = null; // TODO: replace null with proper value
            string tableName = null; // TODO: replace null with proper value
            CloudQuery body = null; // TODO: replace null with proper value
            
            var response = instance.Find(appId, tableName, body);
            Assert.IsInstanceOf<List<CloudObject>> (response, "response is List<CloudObject>"); 
        }
        
        /// <summary>
        /// Test FindById
        /// </summary>
        [Test]
        public void FindByIdTest()
        {
            // TODO: add unit test for the method 'FindById'
            string cloudAppId = null; // TODO: replace null with proper value
            string tableName = null; // TODO: replace null with proper value
            CloudQueryFindById body = null; // TODO: replace null with proper value
            
            var response = instance.FindById(cloudAppId, tableName, body);
            Assert.IsInstanceOf<CloudObject> (response, "response is CloudObject"); 
        }
        
        /// <summary>
        /// Test FindOne
        /// </summary>
        [Test]
        public void FindOneTest()
        {
            // TODO: add unit test for the method 'FindOne'
            string appId = null; // TODO: replace null with proper value
            string tableName = null; // TODO: replace null with proper value
            CloudQueryFindOne body = null; // TODO: replace null with proper value
            
            var response = instance.FindOne(appId, tableName, body);
            Assert.IsInstanceOf<CloudObject> (response, "response is CloudObject"); 
        }
        
    }

}