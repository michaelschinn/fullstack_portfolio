### Mike's Technical Blog
By: Michael Chinn

---
## This is where I will be posting all of my daily / weekly progress and developments while I am attending the **Awesome Inc. Coding Bootcamp**.

# *8/26/2021* | _**Git Over Here!**_ | My First Week at Awesome Inc.
<img alt='Git Over Here!' src='img/scorp-octodex-blog-02.jpg' width='100%'>

---
This week I began the [**Awesome Inc Coding Bootcamp**](https://www.awesomeinc.org/bootcamp) and so far I'm very impressed! I learned about an online IDE called [CodeAnywhere](https://codeanywhere.com/), which is very akin to VS Code, save that it is written entirely in javascript (very cool), as well as receiving an extensive refresher on using [GitHub](https://github.com/)!

I've used GitHub in the past when I was a front-end web developer, but never as in-depth as they are teaching me it can be utilized. As well as, I'm learning that the amount of the things you can forget in 6 years is shocking.

![6 years is a long time!](https://images.theconversation.com/files/286868/original/file-20190805-117861-1tte4c9.jpg?ixlib=rb-1.1.0&rect=0%2C0%2C6240%2C3120&q=45&auto=format&w=1356&h=668&fit=crop)<p align='center'>*6 years is a long time!*</p>

The following are some examples of all that we have gone over in regards to GitHub.

## The Process of Utilizing GitHub

- Initialize your local repository.
- Check the status of your local repo.
- Add files to be commited.
- Commit your changes.
- Create an Empty Repository on the GitHub Server
- Push your changes to the GitHub Server.
- Execute a pull request on your changes.
- Create a "Dev" branch
- Merge your changes into the main branch.
<br><br>
## Initialize Your Local Repository

It's the simplest of things that make all the difference. This eight character command...

`git init`

...is where it all begins. With it you can "Create an empty Git repository or reinitialize an existing one."[*¹*](https://git-scm.com/docs/git-init) In short, it makes it possible to create branches, commit changes, push said changes up to the server, and so much more! None of this would be able to be done without first initializing a local repository. <hr><p align='center'>*¹ From: [https://git-scm.com/docs/git-init](https://git-scm.com/docs/git-init)*</p><hr>
<br>
## Checking the status of your local repo.
It is important to be able to see the difference between what you have on your local repo and your repo on Github. To do this you will use...

`git status`

This is a very useful command. What it does is "Show the working tree status."[²](https://git-scm.com/docs/git-status) It allows you to see what is committed, what is yet to be committed and what needs to be added to be included in your next commit.

![Git status output.](img/git-status.jpg)<p align='center'>*Git status output.*</p><hr><p align='center'>*² From: [https://git-scm.com/docs/git-status](https://git-scm.com/docs/git-status)*</p><hr>
<br>
## Add files to be committed.
Now, we will look into how to update the index with the changes we've made to the working tree. This is done with the command...

`git add -A`

This command allows us to "Add file contents to the index"[*³*](https://git-scm.com/docs/git-add). Without it Git would not know that we wanted to include the changes we've made into the next commit. The option `-A` lets Git know that we want it to look at all of the files that are indexed and add the ones that differ from the working tree *(eg. The files we've changed)*.<hr><p align='center'>*³ From: [https://git-scm.com/docs/git-add](https://git-scm.com/docs/git-add)*</p>
<hr>
<br>

## Commit your changes.
`git commit -m "[message]"`
## Create an Empty Repository on the GitHub Server
## Push your changes to the GitHub Server.
`git push -u origin main`
## Execute a pull request on your changes.
## Creating a Dev branch
## Merge your changes into the main branch.

What's really **Awesome** is that in the past, I never learned to use the GitHub website beyond cloning repos and viewing files. The majority of my experience with it was through a CLI, so it was a real treat to learn the ins and outs of it.

I thank God that I have access to all of the knowledge and experience of the instructors. I can tell that the Bootcamp is going to be a real game changer for me. :)

---