# Service (to service) library

Makes calling external services simple.

## Examples

    // define the service
    
	$github = new Service(
		'Github',
		'https://api.github.com/'
	);


	// simplest GET

    $orgs = $github->get('/orgs/robotpony/repos' );
    print_r($orgs);
    
    // GET with bound parameters (ruby style)
    
    $orgs = $github->get('/orgs/:org/repos', array('org' => 'robotpony')) );
    print_r($orgs);
    
	// defined routes
    // (you could also pass these to the constructor!)
	
	$github->routes( array(
        'my_repos' => '/user/repos',
        'user_repos' => '/users/:username/repos',
        'org_repos' => '/orgs/:org/repos',
        'all_repos' => '/repositories'
    ) );
    
    $orgs = $github->user_repos( array( 'username' => 'robotpony' ) );
    print_r($orgs);

