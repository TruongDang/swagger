#import <Foundation/Foundation.h>
#import "SWGUserRoleBody.h"
#import "SWGCloudUser.h"
#import "SWGPasswordChangeBody.h"
#import "SWGUserBody.h"
#import "SWGEmailBody.h"
#import "SWGObject.h"
#import "SWGApiClient.h"


/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

@interface SWGCloudUserApi: NSObject

@property(nonatomic, assign)SWGApiClient *apiClient;

-(instancetype) initWithApiClient:(SWGApiClient *)apiClient;
-(void) addHeader:(NSString*)value forKey:(NSString*)key;
-(unsigned long) requestQueueSize;
+(SWGCloudUserApi*) apiWithHeader:(NSString*)headerValue key:(NSString*)key;
+(SWGCloudUserApi*) sharedAPI;
///
///
/// add a user to a role
/// 
///
/// @param appId ID of app
/// @param body request body
/// 
///
/// @return SWGCloudUser*
-(NSNumber*) addToRoleWithAppId: (NSString*) appId
    body: (SWGUserRoleBody*) body
    completionHandler: (void (^)(SWGCloudUser* output, NSError* error)) handler;


///
///
/// change a password
/// changes the password for a logged in user without logging them out
///
/// @param appId ID of app
/// @param body request body
/// 
///
/// @return SWGCloudUser*
-(NSNumber*) changePasswordWithAppId: (NSString*) appId
    body: (SWGPasswordChangeBody*) body
    completionHandler: (void (^)(SWGCloudUser* output, NSError* error)) handler;


///
///
/// login existing user
/// 
///
/// @param appId ID of app
/// @param body request body
/// 
///
/// @return SWGCloudUser*
-(NSNumber*) loginWithAppId: (NSString*) appId
    body: (SWGUserBody*) body
    completionHandler: (void (^)(SWGCloudUser* output, NSError* error)) handler;


///
///
/// logout user
/// 
///
/// @param appId ID of app
/// @param body request body
/// 
///
/// @return SWGCloudUser*
-(NSNumber*) logoutWithAppId: (NSString*) appId
    body: (SWGUserBody*) body
    completionHandler: (void (^)(SWGCloudUser* output, NSError* error)) handler;


///
///
/// remove a user from a role
/// 
///
/// @param appId ID of app
/// @param body request body
/// 
///
/// @return SWGCloudUser*
-(NSNumber*) removeFromRoleWithAppId: (NSString*) appId
    body: (SWGUserRoleBody*) body
    completionHandler: (void (^)(SWGCloudUser* output, NSError* error)) handler;


///
///
/// reset a password
/// sends a password reset link to the given email
///
/// @param appId ID of app
/// @param body request body
/// 
///
/// @return NSString*
-(NSNumber*) resetPasswordWithAppId: (NSString*) appId
    body: (SWGEmailBody*) body
    completionHandler: (void (^)(NSString* output, NSError* error)) handler;


///
///
/// create a new user
/// 
///
/// @param appId ID of app
/// @param body request body
/// 
///
/// @return SWGCloudUser*
-(NSNumber*) signUpWithAppId: (NSString*) appId
    body: (SWGUserBody*) body
    completionHandler: (void (^)(SWGCloudUser* output, NSError* error)) handler;



@end