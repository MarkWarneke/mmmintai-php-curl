---
name: Bug report
about: Create a report to help us improve the application
title: 'Bug:'
labels: 'bug :lady_beetle:'
assignees:
  - MarkWarneke
body:
  - type: markdown
    attributes:
      value: |
        Thanks for taking the time to fill out this bug report!
  - type: textarea
    id: what-happened
    attributes:
      label: Describe the bug?
      description: A clear and concise description of what the bug is.
      placeholder: Tell us what you see!
    validations:
      required: true
  - type: textarea
    id: reproduce
    attributes:
      label: To Reproduce?
      description: Steps to reproduce the behavior.
      placeholder: Tell how to get there!
      value: >
        1. Go to '...'
        2. Click on '....'
        3. Scroll down to '....'
        4. See error
    validations:
      required: true
  - type: textarea
    id: version
    attributes:
      label: Version
      description: What version of our software are you running?
  - type: textarea
    id: logs
    attributes:
      label: Relevant log output
      description: Please copy and paste any relevant log output. This will be automatically formatted into code, so no need for backticks.
      render: shell
  - type: textarea
    id: context
    attributes:
      label: Additional context?
      description: Add any other context about the problem here.
      placeholder: Tell how to get there!
---
