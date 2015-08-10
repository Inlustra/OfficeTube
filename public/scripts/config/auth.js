app.config(function ($authProvider) {
    $authProvider.httpInterceptor = true; // Add Authorization header to HTTP request
    $authProvider.loginOnSignup = true;
    $authProvider.baseUrl = '/' // API Base URL for the paths below.
    $authProvider.loginRedirect = '/';
    $authProvider.logoutRedirect = '/';
    $authProvider.signupRedirect = '/login';
    $authProvider.loginUrl = '/auth/login';
    $authProvider.signupUrl = '/auth/signup';
    $authProvider.loginRoute = '/login';
    $authProvider.signupRoute = '/signup';
    $authProvider.tokenRoot = false; // set the token parent element if the token is not the JSON root
    $authProvider.tokenName = 'token';
    $authProvider.tokenPrefix = 'satellizer'; // Local Storage name prefix
    $authProvider.unlinkUrl = '/auth/unlink/';
    $authProvider.unlinkMethod = 'get';
    $authProvider.authHeader = 'Authorization';
    $authProvider.authToken = 'Bearer';
    $authProvider.withCredentials = true;
    $authProvider.platform = 'browser'; // or 'mobile'
    $authProvider.storage = 'localStorage'; // or 'sessionStorage'

// Facebook
    $authProvider.facebook({
        url: '/auth/facebook',
        authorizationEndpoint: 'https://www.facebook.com/v2.3/dialog/oauth',
        redirectUri: (window.location.origin || window.location.protocol + '//' + window.location.host) + '/',
        scope: 'email',
        scopeDelimiter: ',',
        requiredUrlParams: ['display', 'scope'],
        display: 'popup',
        type: '2.0',
        popupOptions: {width: 580, height: 400}
    });

// Google
    $authProvider.google({
        url: '/auth/google',
        authorizationEndpoint: 'https://accounts.google.com/o/oauth2/auth',
        redirectUri: window.location.origin || window.location.protocol + '//' + window.location.host,
        scope: ['profile', 'email'],
        scopePrefix: 'openid',
        scopeDelimiter: ' ',
        requiredUrlParams: ['scope'],
        optionalUrlParams: ['display'],
        display: 'popup',
        type: '2.0',
        popupOptions: {width: 580, height: 400}
    });

// LinkedIn
    $authProvider.linkedin({
        url: '/auth/linkedin',
        authorizationEndpoint: 'https://www.linkedin.com/uas/oauth2/authorization',
        redirectUri: window.location.origin || window.location.protocol + '//' + window.location.host,
        requiredUrlParams: ['state'],
        scope: ['r_emailaddress'],
        scopeDelimiter: ' ',
        state: 'STATE',
        type: '2.0',
        popupOptions: {width: 527, height: 582}
    });

// Twitter
    $authProvider.twitter({
        name: 'twitter',
        url: '/auth/twitter',
        authorizationEndpoint: 'https://api.twitter.com/oauth/authenticate',
        redirectUri: window.location.origin || window.location.protocol + '//' + window.location.host,
        type: '1.0',
        popupOptions: {width: 495, height: 645}
    });

// GitHub
    $authProvider.github({
        url: '/auth/github',
        authorizationEndpoint: 'https://github.com/login/oauth/authorize',
        redirectUri: window.location.origin || window.location.protocol + '//' + window.location.host,
        scope: ['user:email'],
        scopeDelimiter: ' ',
        type: '2.0',
        popupOptions: {width: 1020, height: 618}
    });

// Windows Live
    $authProvider.live({
        url: '/auth/live',
        authorizationEndpoint: 'https://login.live.com/oauth20_authorize.srf',
        redirectUri: window.location.origin || window.location.protocol + '//' + window.location.host,
        scope: ['wl.emails'],
        scopeDelimiter: ' ',
        requiredUrlParams: ['display', 'scope'],
        display: 'popup',
        type: '2.0',
        popupOptions: {width: 500, height: 560}
    });

// Yahoo
    $authProvider.yahoo({
        url: '/auth/yahoo',
        authorizationEndpoint: 'https://api.login.yahoo.com/oauth2/request_auth',
        redirectUri: window.location.origin || window.location.protocol + '//' + window.location.host,
        scope: [],
        scopeDelimiter: ',',
        type: '2.0',
        popupOptions: {width: 559, height: 519}
    });

    $authProvider.oauth2({
        url: '/auth/soundcloud',
        name: 'soundcloud',
        scope: [],
        scopeDelimiter: ',',
        redirectUri: window.location.origin || window.location.protocol + '//' + window.location.host,
        popupOptions: null,
        authorizationEndpoint: 'https://soundcloud.com/connect',
        defaultUrlParams: ['response_type', 'client_id', 'redirect_uri'],
        responseType: 'code'
    });
    console.log(window.location.origin || window.location.protocol + '//' + window.location.host);
    $authProvider.oauth2({
        url: '/auth/soundcloud',
        name: 'soundcloud',
        scope: [],
        scopeDelimiter: ',',
        clientId: '647fac0a898e40d86cdfd83f2b0c031d',
        redirectUri: window.location.origin || window.location.protocol + '//' + window.location.host,
        popupOptions: null,
        authorizationEndpoint: 'https://soundcloud.com/connect',
        responseParams: null,
        requiredUrlParams: null,
        optionalUrlParams: null,
        defaultUrlParams: ['response_type', 'client_id', 'redirect_uri'],
        responseType: 'code'
    });

});