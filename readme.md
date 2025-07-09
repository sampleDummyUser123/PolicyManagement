📁 Step-by-Step Demo Setup
1. Create your project folder
bash
Copy
Edit
mkdir transitive-vuln-demo
cd transitive-vuln-demo
npm init -y
2. Install the vulnerable package
bash
Copy
Edit
npm install serve@11.3.2
This version pulls in old transitive packages (like http-proxy@1.18.1) which have known CVEs.

3. Run audit to expose the transitive vulnerability
bash
Copy
Edit
npm audit
You’ll likely see output like:

csharp
Copy
Edit
# npm audit report

event-stream  <X.X.X
Severity: Critical
Arbitrary code execution via flatmap-stream
Found in: serve > http-proxy > event-stream
💡 event-stream was infamously hijacked and used for supply chain attacks.

You may also see issues with:

http-proxy@1.18.1 — CVE-2021-23440: Prototype pollution.

