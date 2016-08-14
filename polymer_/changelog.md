#### HTMLImports
- comments ([commit](https://github.com/Polymer/HTMLImports/commit/7182038))

#### CustomElements
- Address same issue as PR 57. Android browser is not supported, but implemented fix since it's trivial. ([commit](https://github.com/Polymer/CustomElements/commit/63790ee))
- Remove CustomElements.watchAllShadows. Platform repo now overrides createShadowRoot and handles this automatically. Fixes issue #24. Also fixes CustomElements build. ([commit](https://github.com/Polymer/CustomElements/commit/046cda3))
- README: remove commmented section ([commit](https://github.com/Polymer/CustomElements/commit/b2d460e))

#### PointerEvents
- Update README.md ([commit](https://github.com/Polymer/PointerEvents/commit/e58bceb))

#### PointerGestures
- remove stale yuidoc config file ([commit](https://github.com/Polymer/PointerGestures/commit/600ebb0))
- ignore node_modules, tools, and tests folders from yuidoc ([commit](https://github.com/Polymer/PointerGestures/commit/aa7d696))
- Fix up docs for PointerGestures ([commit](https://github.com/Polymer/PointerGestures/commit/bb0072d))
- Set buttons for tap test ([commit](https://github.com/Polymer/PointerGestures/commit/98fd08a))

#### ShadowDOM
- Merge pull request #241 from dart-lang/rm_newline ([commit](https://github.com/Polymer/ShadowDOM/commit/58c9eea))
- remove extra newline from enclosedBy in events.js ([commit](https://github.com/Polymer/ShadowDOM/commit/22be6fa))
- Merge pull request #240 from arv/use-eval ([commit](https://github.com/Polymer/ShadowDOM/commit/f294aba))
- Use eval for default generated getters, setters and methods. ([commit](https://github.com/Polymer/ShadowDOM/commit/a75cc01))
- Merge pull request #239 from arv/wrappers-as-expando ([commit](https://github.com/Polymer/ShadowDOM/commit/7d430a9))
- Use an expando property for the wrapper. ([commit](https://github.com/Polymer/ShadowDOM/commit/ba30170))
- Merge pull request #238 from sjmiles/master ([commit](https://github.com/Polymer/ShadowDOM/commit/52b9a34))
- call renderAllPender() in getComputedStyle() override + test ([commit](https://github.com/Polymer/ShadowDOM/commit/068e986))
- Merge pull request #231 from arv/micro-optimize-wrap ([commit](https://github.com/Polymer/ShadowDOM/commit/8f21896))
- Merge pull request #233 from arv/adding-content-or-shadow-needs-to-invalidate-renderer ([commit](https://github.com/Polymer/ShadowDOM/commit/83c6631))
- README: clean up substree explainers ([commit](https://github.com/Polymer/ShadowDOM/commit/c0dd275))
- Fix issues related to tree changes. ([commit](https://github.com/Polymer/ShadowDOM/commit/b1805d6))
- Optimize wrap ([commit](https://github.com/Polymer/ShadowDOM/commit/eb5f3b7))

#### observe-js
- Merge pull request #26 from mangini/master ([commit](https://github.com/Polymer/observe-js/commit/4d3bf23))
- changed hasEval logic to always test for eval when CSP securityPolicy.allowsEval is true ([commit](https://github.com/Polymer/observe-js/commit/18308da))
- Changed hasEval test to avoid console error if browser supports securityPolicy. If securityPolicy is not supported, use the previous try/catch procedure. CSP errors are always sent to console, even when they get caught in a try/catch block. ([commit](https://github.com/Polymer/observe-js/commit/e4ffed1))
- One more time. Remove Path.isValid, expose path.valid. Make invalidPath a singleton ([commit](https://github.com/Polymer/observe-js/commit/db1d00d))
- put Path.isValid back ([commit](https://github.com/Polymer/observe-js/commit/cf35308))
- Expose Path.get and support Paths as arguments to PathObserver and CompoundPath observer ([commit](https://github.com/Polymer/observe-js/commit/4190641))
- Dirty-check underlying value -- not computed value ([commit](https://github.com/Polymer/observe-js/commit/6c7b0cf))

#### NodeBind
- optimize unbind ([commit](https://github.com/Polymer/NodeBind/commit/8e33d67))
- NodeBinding.path is a Path (not string) ([commit](https://github.com/Polymer/NodeBind/commit/a482404))
- use path.getValueFrom ([commit](https://github.com/Polymer/NodeBind/commit/5cb8671))
- Fix IE ([commit](https://github.com/Polymer/NodeBind/commit/17f1550))

#### TemplateBinding
- getInstanceModel -> prepareInstanceModel ([commit](https://github.com/Polymer/TemplateBinding/commit/35f5c69))
- avoid calling isTemplate for every instance created ([commit](https://github.com/Polymer/TemplateBinding/commit/ad64879))
- Remove last use of CompoundBinding ([commit](https://github.com/Polymer/TemplateBinding/commit/f0cd16a))
- getBinding -> prepareBinding/bindingFn ([commit](https://github.com/Polymer/TemplateBinding/commit/6d98251))
- Fix test ([commit](https://github.com/Polymer/TemplateBinding/commit/1162259))
- Fix IE ([commit](https://github.com/Polymer/TemplateBinding/commit/4d81bfa))
- Refactor processBindings ([commit](https://github.com/Polymer/TemplateBinding/commit/c97d211))

#### polymer-expressions
- getInstanceModel -> prepareInstanceModel ([commit](https://github.com/Polymer/polymer-expressions/commit/1ec937c))
- getBinding -> prepareBinding ([commit](https://github.com/Polymer/polymer-expressions/commit/66958ea))
- Refactor in advance of implementing prepareBinding ([commit](https://github.com/Polymer/polymer-expressions/commit/7ca5d31))
- Use path.valid, rather than Path.isValid ([commit](https://github.com/Polymer/polymer-expressions/commit/604e9d8))
- Retain references to Path objects ([commit](https://github.com/Polymer/polymer-expressions/commit/94ec638))
- Revert "Use Path.get instead of Path.isValid" ([commit](https://github.com/Polymer/polymer-expressions/commit/4a4a45a))
- Use Path.get instead of Path.isValid ([commit](https://github.com/Polymer/polymer-expressions/commit/0ac6e7d))

#### platform
- add test for Polymer/ShadowDOM#235 ([commit](https://github.com/Polymer/platform/commit/8631874))
- Remove deprecated window.dirtyCheck(); use Platform.flush() instead. Fixes issue #10 ([commit](https://github.com/Polymer/platform/commit/fe5a959))
- add @polyfill-rule polyfill styles; helps address issue #36 ([commit](https://github.com/Polymer/platform/commit/8ce81d0))

#### polymer
- bump version for release ([commit](https://github.com/Polymer/polymer/commit/c440c8e))
- use new Path api (see #267) ([commit](https://github.com/Polymer/polymer/commit/cc63fcb))
- utils should not use methods it's deprecating itself ([commit](https://github.com/Polymer/polymer/commit/2f7c655))
- addresses issue #262 ([commit](https://github.com/Polymer/polymer/commit/cb5c1bd))

#### polymer-elements
- fire an event after performing layout ([commit](https://github.com/Polymer/polymer-elements/commit/4779061))
- more compact example ([commit](https://github.com/Polymer/polymer-elements/commit/c28386b))
- more doc work on polymer-layout ([commit](https://github.com/Polymer/polymer-elements/commit/ddb9007))
- polymer-layout: update indentation for generated docs ([commit](https://github.com/Polymer/polymer-elements/commit/cb0da62))

#### polymer-ui-elements
- improve theme handling code ([commit](https://github.com/Polymer/polymer-ui-elements/commit/3083398))
- update icon doc comments, metadata edits ([commit](https://github.com/Polymer/polymer-ui-elements/commit/78a7b95))

#### more-elements
- improve some more-elements ([commit](https://github.com/Polymer/more-elements/commit/cff0621))
- make route regex accept all characters ([commit](https://github.com/Polymer/more-elements/commit/ebedbf6))
- minor updates ([commit](https://github.com/Polymer/more-elements/commit/c435d39))

#### toolkit-ui
- exchange Platform.flush for deprecated dirtyCheck ([commit](https://github.com/Polymer/toolkit-ui/commit/5f01386))

#### projects
- optimized pica version for testing. ([commit](https://github.com/Polymer/projects/commit/95a9af9))
- optimized pica version for testing. ([commit](https://github.com/Polymer/projects/commit/30bb4cc))

#### tools
- put more space in changelog.md, overwrite zip file each run ([commit](https://github.com/Polymer/tools/commit/e0a0ce5))

#### todomvc

#### labs
- Update README to reflect all-in-one html files ([commit](https://github.com/Polymer/labs/commit/48fcaec))
- Shuttle v2 ([commit](https://github.com/Polymer/labs/commit/662fe56))
- latest static test files ([commit](https://github.com/Polymer/labs/commit/95ecfcf))
- Merge branch 'vulcan-all-inline' ([commit](https://github.com/Polymer/labs/commit/15e064d))
- scroll to hash after docsnode populates ([commit](https://github.com/Polymer/labs/commit/db44f29))
- Try to insert inlined import exactly where the link was ([commit](https://github.com/Polymer/labs/commit/0285ca0))
- add static version of docs using flatiron-director ([commit](https://github.com/Polymer/labs/commit/713b6e0))
- move static apps to 'static' folder ([commit](https://github.com/Polymer/labs/commit/280dc44))
- various experiments; add static version of maker for debugging shadowdom polyfill ([commit](https://github.com/Polymer/labs/commit/0a74c28))
- Merge pull request #23 from shans/fadeFix ([commit](https://github.com/Polymer/labs/commit/40498e6))
- Merge pull request #22 from shans/fadeTest ([commit](https://github.com/Polymer/labs/commit/1ca7978))
- Simplify fade primitives. ([commit](https://github.com/Polymer/labs/commit/3c5be51))
- Test fade effects, fix some bugs in fading implementation. ([commit](https://github.com/Polymer/labs/commit/9e6ac16))
- Merge pull request #21 from shans/nestedTest2 ([commit](https://github.com/Polymer/labs/commit/a1b3d49))
- Support nested absolute / relative positioning. ([commit](https://github.com/Polymer/labs/commit/ab557bc))
- Merge pull request #20 from shans/shadow ([commit](https://github.com/Polymer/labs/commit/9c4c34a))
- Add support for shadow DOM. ([commit](https://github.com/Polymer/labs/commit/a53fa20))
- make everything from imports inlined ([commit](https://github.com/Polymer/labs/commit/1404fe4))

