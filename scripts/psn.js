
import { makeUniversalSearch } from "./psn-api";


async function main(){
   const myNpsso = "uBpFWdWaBMVE0XnDAOQfVm7xOlJ5YCaxVLn336rr52EGsf2PJwgZDNTmGjkMiXV7";
   const accessCode = await exchangeNpssoForCode(npsso);
   const authorization = await exchangeCodeForAccessToken(accessCode);

   const allAccountsSearchResults = await makeUniversalSearch(
    { accessToken: authorization.accessToken },
    "me",
    "SocialAllAccounts"
   );
   
   const targetAccountId = allAccountsSearchResults.domainResponses[0].results[0].socialMetadata.accountId;

   console.log(targetAccountId);
}





