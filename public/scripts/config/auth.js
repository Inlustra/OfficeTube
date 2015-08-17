app.config(function ($authProvider) {
    $authProvider.loginRedirect = null;
    $authProvider.oauth2({
        url: '/auth/with/soundcloud',
        name: 'soundcloud',
        scope: [],
        scopeDelimiter: ',',
        clientId: '647fac0a898e40d86cdfd83f2b0c031d',
        redirectUri: window.location.origin || window.location.protocol + '//' + window.location.host,
        popupOptions: null,
        authorizationEndpoint: 'https://soundcloud.com/connect',
        defaultUrlParams: ['response_type', 'client_id', 'redirect_uri'],
        responseType: 'code'
    });

});