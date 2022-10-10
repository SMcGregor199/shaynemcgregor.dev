
import { 
   exchangeNpssoForCode,
   exchangeCodeForAccessToken,
   makeUniversalSearch,
   getUserTitles
   
} from "./psn-api";


async function main(){
   const myNpsso = "uBpFWdWaBMVE0XnDAOQfVm7xOlJ5YCaxVLn336rr52EGsf2PJwgZDNTmGjkMiXV7";
   const accessCode = await exchangeNpssoForCode(myNpsso);
   const authorization = await exchangeCodeForAccessToken(accessCode);

   const allAccountsSearchResults = await makeUniversalSearch(
    authorization,
    "me",
    "SocialAllAccounts"
  );

   const targetAccountId = 
      allAccountsSearchResults.domainResponses[0].results[0].socialMetadata
      .accountId;

   const titles = await getUserTitles(authorization, targetAccountId);

   console.log(titles);
}

main();





