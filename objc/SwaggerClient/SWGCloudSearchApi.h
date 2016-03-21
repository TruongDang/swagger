#import <Foundation/Foundation.h>
#import "SWGCloudObject.h"
#import "SWGCloudSearch.h"
#import "SWGObject.h"
#import "SWGApiClient.h"


/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

@interface SWGCloudSearchApi: NSObject

@property(nonatomic, assign)SWGApiClient *apiClient;

-(instancetype) initWithApiClient:(SWGApiClient *)apiClient;
-(void) addHeader:(NSString*)value forKey:(NSString*)key;
-(unsigned long) requestQueueSize;
+(SWGCloudSearchApi*) apiWithHeader:(NSString*)headerValue key:(NSString*)key;
+(SWGCloudSearchApi*) sharedAPI;
///
///
/// search for cloudobjects following the criteria defined herein
/// 
///
/// @param appId CloudApp id
/// @param tableName cloud table name
/// @param body query body
/// 
///
/// @return NSArray<SWGCloudObject>*
-(NSNumber*) searchWithAppId: (NSString*) appId
    tableName: (NSString*) tableName
    body: (SWGCloudSearch*) body
    completionHandler: (void (^)(NSArray<SWGCloudObject>* output, NSError* error)) handler;



@end