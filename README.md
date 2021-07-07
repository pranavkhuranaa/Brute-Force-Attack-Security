# Brute-Force-Attack-Security

 <!-- Banner
<div class="container-fluid">
  <img class="mx-auto" src="assets/banner.png">
</div> -->

<!--[![All Contributors](https://img.shields.io/badge/all_contributors-04-orange.svg?style=flat-square)](#contributors-)-->

[![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/built-with-swag.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/for-you.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/open-source.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/check-it-out.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/made-with-python.svg)](https://forthebadge.com)

## 📌 Introduction

In the project, ***Brute-Force-Attack-Security***, Brute Force attack has been performed on a self-developed *banking management website*
and provided security solutions including Detection and Incident Response.
<br>
## ⭐ Features 
1. Brute Force Attack on the Website using Hydra Password Cracking tool
2. Attack detection by tracking and stroing logs IP address of the attacker after a limited attempts, date and time of attack. Data is stored in SQL Database.
3. Brite force attack Incident Response - Blocking the IP address of the attacker when suspicious activity is detected

<br>

## ⭐ How to get started?
[![forthebadge](https://forthebadge.com/images/badges/not-a-bug-a-feature.svg)](https://forthebadge.com) <br>
You can refer to the following articles on the basics of Git and Github and also contact the Project Mentors, in case you are stuck:

- [Watch this video to get started, if you have no clue about open source](https://youtu.be/SL5KKdmvJ1U)
- [Forking a Repo](https://help.github.com/en/github/getting-started-with-github/fork-a-repo)
- [Cloning a Repo](https://help.github.com/en/desktop/contributing-to-projects/creating-a-pull-request)
- [How to create a Pull Request](https://opensource.com/article/19/7/create-pull-request-github)
- [Getting started with Git and GitHub](https://towardsdatascience.com/getting-started-with-git-and-github-6fcd0f2d4ac6)
- [Join the workspace to join the community of contributors](https://join.slack.com/t/opensourcecon-q6c3969/shared_invite/zt-kkqg4h5t-G3euksLSmBI4PJ3lg6WbrA)

<br>

## ⭐ Steps to follow :scroll:

<br>


### 1️⃣ Fork it :fork_and_knife:

You can get your own fork/copy of [

](https://github.com/pranavkhuranaa/Brute-Force-Attack-Security) by using the <kbd><b>Fork</b></kbd> button.

<br>


### 2️⃣ Clone it :busts_in_silhouette:

You need to clone (download) it to local machine using

```sh
$ git clone https://github.com/Your_Username/Brute-Force-Attack-Security.git
```

> This makes a local copy of repository in your machine.

Once you have cloned the `Brute-Force-Attack-Security` repository in Github, move to that folder first using change directory command on linux and Mac.

```sh
# This will change directory to a folder Brute-Force-Attack-Security
$ cd Brute-Force-Attack-Security
```

Move to this folder for all other commands.

<br>



### 3️⃣ Set it up :arrow_up:

Run the following commands to see that *your local copy* has a reference to *your forked remote repository* in Github :octocat:

```sh
$ git remote -v
origin  https://github.com/Your_Username/Brute-Force-Attack-Security.git (fetch)
origin  https://github.com/Your_Username/Brute-Force-Attack-Security.git (push)
```
Now, lets add a reference to the original [Brute-Force-Attack-Security](https://github.com/pranavkhuranaa/Brute-Force-Attack-Security) repository using

```sh
$ git remote add upstream https://github.com/pranavkhuranaa/Brute-Force-Attack-Security.git
```

> This adds a new remote named ***upstream***.

See the changes using

```sh
$ git remote -v
origin    https://github.com/Your_Username/Brute-Force-Attack-Security.git (fetch)
origin    https://github.com/Your_Username/Brute-Force-Attack-Security.git (push)
upstream  https://github.com/pranavkhuranaa/Brute-Force-Attack-Security.git (fetch)
upstream  https://github.com/pranavkhuranaa/Brute-Force-Attack-Security.git (push)
```

<br>



### 4️⃣ Sync it :recycle:

Always keep your local copy of repository updated with the original repository.
Before making any changes and/or in an appropriate interval, run the following commands *carefully* to update your local repository.

```sh
# Fetch all remote repositories and delete any deleted remote branches
$ git fetch --all --prune

# Switch to `master` branch
$ git checkout master

# Reset local `master` branch to match `upstream` repository's `master` branch
$ git reset --hard upstream/master

# Push changes to your forked `Learning-Made-Easy` repo
$ git push origin master
```

<br>



### 5️⃣ Ready Steady Go... :turtle: :rabbit2:

Once you have completed these steps, you are ready to start contributing by checking our `Help Wanted` Issues and creating [pull requests](https:/pranavkhuranaa/Brute-Force-Attack-Security/github.com//pulls).

<br>

### 6️⃣ Running the work on your local machine :computer:

To run the code and play with the app on your local machine, do:
* Download Hydra Tool
* Install XAMPP Server for running MySQL Server (PHPMyAdmin for SQL Database)

<br>

### 7️⃣ Create a new branch :bangbang:

Whenever you are going to make contribution. Please create seperate branch using command and keep your `master` branch clean (i.e. synced with remote branch).

```sh
# It will create a new branch with name Branch_Name and switch to branch Folder_Name
$ git checkout -b Folder_Name
```

Create a seperate branch for contibution and try to use same name of branch as of folder.

To switch to desired branch

```sh
# To switch from one folder to other
$ git checkout Folder_Name
```

To add the changes to the branch. Use

```sh
# To add all files to branch Folder_Name
$ git add .
```

Type in a message relevant for the code reveiwer using

```sh
# This message get associated with all files you have changed
$ git commit -m 'relevant message'
```

<br>


### 8️⃣ Share your work :star_struck:

Now, Push your awesome work to your remote repository using

```sh
# To push your work to your remote repository
$ git push -u origin Folder_Name
```

Then, go to your repository in browser and click on `compare and pull requests`.
Then add a title and description to your pull request that explains your precious effort.

<br>


### 9️⃣ Get Featured in the Contributor's List! 👩‍💻👨‍💻

Finally, after your pull request has been merged, add another comment below the PR as follows

```sh
@all-contributors please add @<your_username> for <contributions>
```
In contributions, you need to type `code` if you have contributed to the code, or `documentation` if you 
contrubuted for the markdown files.
[Click here for more instructions](https://allcontributors.org/docs/en/bot/usage)

## ⭐ Help Contributing Guides :crown:

We love to have `articles` and `codes` in different languages and `betterment` of existing ones.

Please discuss it with us first by creating new issue.

:tada: :confetti_ball: :smiley: _**Happy Contributing**_ :smiley: :confetti_ball: :tada:

<br>

## ⭐ Language Used:

HTML, CSS, JavaScript, PHP, SQL

<br>

<!-- ## ⭐ Basic Functionalities: -->
<!-- [![forthebadge](https://forthebadge.com/images/badges/powered-by-responsibility.svg)](https://forthebadge.com) -->

<!-- To schedule the exams for a very short period of time i.e. 1-2 days for the students who begin to study just before the day of the exam and complete syllabus in a very short time. -->

<!-- To schedule the exam time study for students subject wise who start their studies one or two week before the exams so they complete their syllabus of each subject in time. -->


<!-- To schedule the exam time study for students who begin to study quite early I.e. almost a month ago and have enough time to do everything in the syllabus. Also they have no time issue. -->


<!-- 
<br>

## ⭐ Algorithm used: -->
<!-- 
[![forthebadge](https://forthebadge.com/images/badges/uses-brains.svg)](https://forthebadge.com)

Fractional Knapsack Algorithm: Fractional Knapsack algorithm is used in order to find the chapters to be done on the basis of their weightage so as to maximize marks in limited amount of time.

Job Scheduling Algorithm: This algorithm is implemented so that the user inputs the subjects he/she has to study with the date of exams of the respective subjects and respective priorities. So they get the sequence of subjects as ouput for effective ways of study and managing time.
 -->
<!-- 
<br>

## ⭐ Real Life Application: 
[![forthebadge](https://forthebadge.com/images/badges/makes-people-smile.svg)](https://forthebadge.com) <br>
A most common problem faced by students during exams is of time management and its utilization.It can help students to effectively manage their time during exams by giving them a sequence in which the should study in order to maximize marks.

<br> 
-->

<!-- ## ⭐ Achievements :cupcake: -->
 <!-- jwoc -->
<!-- <div class="container-fluid">
  <img class="mx-auto" src="assets/jwoc.jpg">
</div>


<br>
<br> -->


## 💥 How to Contribute?

[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com)
[![Open Source Love svg2](https://badges.frapsoft.com/os/v2/open-source.svg?v=103)](https://github.com/ellerbrock/open-source-badges/)
<br>
- Take a look at the Existing [Issues](https://github.com/pranavkhuranaa/Brute-Force-Attack-Security/issues) or create your own Issues!
- Wait for the Issue to be assigned to you after which you can start working on it.
- Fork the Repo and create a Branch for any Issue that you are working upon.
- Create a Pull Request which will be promptly reviewed and suggestions would be added to improve it.
- Contact pranav.khuranaa@gmail.com for more information regarding contributions.
