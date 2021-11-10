<?php
$lang->gitlab = new stdclass;
$lang->gitlab->common        = 'GitLab';
$lang->gitlab->browse        = 'GitLab Browse';
$lang->gitlab->create        = 'Create GitLab';
$lang->gitlab->edit          = 'Edit GitLab';
$lang->gitlab->view          = 'View GitLab';
$lang->gitlab->bindUser      = 'Bind User';
$lang->gitlab->webhook       = 'webhook';
$lang->gitlab->bindProduct   = 'Import Product';
$lang->gitlab->importIssue   = 'Import Issue';
$lang->gitlab->delete        = 'Delete GitLab';
$lang->gitlab->confirmDelete = 'Do you want to delete this GitLab server?';
$lang->gitlab->gitlabAccount = 'GitLab Account';
$lang->gitlab->zentaoAccount = 'Zentao Account';
$lang->gitlab->bindingStatus = 'Binding Status';
$lang->gitlab->binded        = 'Binded';
$lang->gitlab->serverFail    = 'Connect to GitLab server failed, please check the GitLab server.';
$lang->gitlab->lastUpdate    = 'Last Update';

$lang->gitlab->browseAction  = 'GitLab List';
$lang->gitlab->deleteAction  = 'Delete GitLab';
$lang->gitlab->gitlabProject = "GitLab Project";
$lang->gitlab->browseProject = "GitLab Project List";
$lang->gitlab->browseUser    = "User List";
$lang->gitlab->browseGroup   = "Group List";
$lang->gitlab->gitlabIssue   = "GitLab Issue";
$lang->gitlab->zentaoProduct = 'Zentao Product';
$lang->gitlab->objectType    = 'Type'; // task, bug, story

$lang->gitlab->id             = 'ID';
$lang->gitlab->name           = "GitLab Name";
$lang->gitlab->url            = 'GitLab URL';
$lang->gitlab->token          = 'Token';
$lang->gitlab->defaultProject = 'Default Project';
$lang->gitlab->private        = 'MD5 Verify';

$lang->gitlab->lblCreate  = 'Create GitLab Server';
$lang->gitlab->desc       = 'Description';
$lang->gitlab->tokenFirst = 'When the Token is not empty, the Token will be used first';
$lang->gitlab->tips       = 'When using a password, please disable the "Prevent cross-site request forgery" option in the GitLab global security settings.';

$lang->gitlab->placeholder = new stdclass;
$lang->gitlab->placeholder->name  = '';
$lang->gitlab->placeholder->url   = "Please fill in the access address of the GitLab Server homepage, as: https://gitlab.zentao.net.";
$lang->gitlab->placeholder->token = "Please fill in the access token of an account with admin privileges.";

$lang->gitlab->noImportableIssues = "There are currently no issues available for import.";
$lang->gitlab->tokenError         = "The current token is not admin rights.";
$lang->gitlab->tokenLimit         = "The current token has no admin privilege. Please regenerate one with admin user in GitLab.";
$lang->gitlab->hostError          = "Invalid GitLab service address.";
$lang->gitlab->bindUserError      = "Can not bind users repeatedly %s";
$lang->gitlab->importIssueError   = "The execution to which this issue belongs is not selected.";
$lang->gitlab->importIssueWarn    = "There is a problem of import failure, you can try to import again.";

$lang->gitlab->project = new stdclass;
$lang->gitlab->project->id                         = "Project ID";
$lang->gitlab->project->name                       = "Project name";
$lang->gitlab->project->create                     = "Create {$lang->gitlab->gitlabProject}";
$lang->gitlab->project->edit                       = "Edit {$lang->gitlab->gitlabProject}";
$lang->gitlab->project->url                        = "Project URL";
$lang->gitlab->project->path                       = "Project slug";
$lang->gitlab->project->description                = "Project description";
$lang->gitlab->project->visibility                 = "Visibility Level";
$lang->gitlab->project->visibilityList['private']  = "Private(Project access must be granted explicitly to each user. If this project is part of a group, access will be granted to members of the group)";
$lang->gitlab->project->visibilityList['internal'] = "Internal(The project can be accessed by any logged in user except external users)";
$lang->gitlab->project->visibilityList['public']   = "Public(The project can be accessed without any authentication)";
$lang->gitlab->project->star                       = "Stars";
$lang->gitlab->project->fork                       = "Forks";
$lang->gitlab->project->mergeRequests              = "Merge Requests";
$lang->gitlab->project->issues                     = "Issues";
$lang->gitlab->project->tagList                    = "Topics";
$lang->gitlab->project->tagListTips                = "Separate topics with commas.";
$lang->gitlab->project->emptyError                 = "Project name or slug cannot be empty";
$lang->gitlab->project->confirmDelete              = 'Do you want to delete this GitLab project?';

$lang->gitlab->user = new stdclass;
$lang->gitlab->user->id             = "User ID";
$lang->gitlab->user->name           = "Name";
$lang->gitlab->user->username       = "Username";
$lang->gitlab->user->email          = "Email";
$lang->gitlab->user->password       = "Password";
$lang->gitlab->user->passwordRepeat = "Repeat Password";
$lang->gitlab->user->projectsLimit  = "Projects limit";
$lang->gitlab->user->canCreateGroup = "Can create group";
$lang->gitlab->user->external       = "External";
$lang->gitlab->user->externalTip    = "External users cannot see internal or private projects unless access is explicitly granted. Also, external users cannot create projects, groups, or personal snippets.";
$lang->gitlab->user->bind           = "Bind Zentao user";
$lang->gitlab->user->avatar         = "Avatar";
$lang->gitlab->user->skype          = "Skype";
$lang->gitlab->user->linkedin       = "Linkedin";
$lang->gitlab->user->twitter        = "Twitter";
$lang->gitlab->user->websiteUrl     = "Website url";
$lang->gitlab->user->note           = "Note";
$lang->gitlab->user->createOn       = "Created on";
$lang->gitlab->user->lastActivity   = "Last activity";
$lang->gitlab->user->create         = "Create {$lang->gitlab->gitlabAccount}";
$lang->gitlab->user->edit           = "Edit {$lang->gitlab->gitlabAccount}";
$lang->gitlab->user->emptyError     = "cannot be empty";
$lang->gitlab->user->passwordError  = "The second password is inconsistent!";
$lang->gitlab->user->bindError      = "The user has been bound!";
$lang->gitlab->user->confirmDelete  = 'Do you want to delete this GitLab user?';

$lang->gitlab->group = new stdclass;
$lang->gitlab->group->id                                      = "Group ID";
$lang->gitlab->group->name                                    = "Group name";
$lang->gitlab->group->path                                    = "Group URL";
$lang->gitlab->group->pathTip                                 = "Changing group URL can have unintended side effects.";
$lang->gitlab->group->description                             = "Group description";
$lang->gitlab->group->avatar                                  = "Group avatar";
$lang->gitlab->group->avatarTip                               = 'Max file size is 200 KB.';
$lang->gitlab->group->visibility                              = "Visibility level";
$lang->gitlab->group->visibilityList['private']               = "Private(The group and its projects can only be viewed by members)";
$lang->gitlab->group->visibilityList['internal']              = "Internal(The group and any internal projects can be viewed by any logged in user except external users)";
$lang->gitlab->group->visibilityList['public']                = "Public(The group and any public projects can be viewed without any authentication.)";
$lang->gitlab->group->requestAccessEnabledTip                 = "Allow users to request access (if visibility is public or internal)";
$lang->gitlab->group->lfsEnabled                              = 'Large File Storage';
$lang->gitlab->group->lfsEnabledTip                           = "Allow projects within this group to use Git LFS(This setting can be overridden in each project)";
$lang->gitlab->group->projectCreationLevel                    = "Allowed to create projects";
$lang->gitlab->group->projectCreationLevelList['none']        = "No one";
$lang->gitlab->group->projectCreationLevelList['maintainer']  = "Maintainers";
$lang->gitlab->group->projectCreationLevelList['developer']   = "Developers + Maintainers";
$lang->gitlab->group->subgroupCreationLevel                   = "Allowed to create projects";
$lang->gitlab->group->subgroupCreationLevelList['owner']      = "Owners";
$lang->gitlab->group->subgroupCreationLevelList['maintainer'] = "Maintainers";
$lang->gitlab->group->create                                  = "Create Group";
$lang->gitlab->group->edit                                    = "Edit Group";
$lang->gitlab->group->createOn                                = "Created on";
$lang->gitlab->group->members                                 = "Group Members";
$lang->gitlab->group->confirmDelete                           = 'Do you want to delete this GitLab group?';
$lang->gitlab->group->emptyError                              = "cannot be empty";